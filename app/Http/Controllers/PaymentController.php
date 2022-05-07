<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use Illuminate\Support\Facades\Http;
use Nikolag\Square\Models\Customer;
use Illuminate\Support\Facades\URL;

class PaymentController extends Controller
{
    public function index(Service $service)
    {
        return view('guest.payment', [
                'price' => $service->price,
                'service' => $service->name,
                'service_id' => $service->id
            ]);  
    }

    public function createPayment(Request $request)
    {
        $idempotencyKey = uniqid();

        // $customerArr =[
        //     'first_name' => '',
        //     'last_name' => '',
        //     'email' => '',
        //     'phone' => '',
        //  ];

         // $customer = new Customer($customerArr);
         // $customer->save();
        $service = Service::find($request->serviceId);
        $redirectUrl = URL::signedRoute('payment.complete', ['service' => $service->id]);

        //test code
        return response()->json(['redirectUrl' => $redirectUrl]); 
        
        $data = [
            'idempotency_key' => $idempotencyKey,
            'amount_money' => [
                'amount' => $service->getRawOriginal('price'),
                'currency' => 'USD'
            ],
            'source_id' => $request->sourceId,
            'location_id' => $request->locationId
        ];

        $response = Http::withToken(env('SQUARE_TOKEN'))
                ->withHeaders([
                    'Square-Version' => '2022-04-20',
                ])
                ->accept('application/json')
                ->post('https://connect.squareupsandbox.com/v2/payments', $data);

        if($response->successful()) {
            $res = $response->object();
            if ($res->payment->status == 'COMPLETED') {
                $result = [
                    'success' => true,
                    'payment' => [
                        'id' => $res->payment->id,
                        'status' => $res->payment->status,
                        'receipt_url' => $res->payment->receipt_url,
                        'orderID' => $res->payment->order_id
                    ],
                    'redirect_url' => $redirectUrl
                ];
            }
            else {
                $result = [
                    'success' => false,
                ];
            }
            return response()->json($result);
        }
    }

    public function paymentComplete(Request $request, $service)
    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }
        $user = auth()->user();
        $service = Service::find($service);
        $user->services()->attach($service);

        $user->update([
            'line1' => $request->line1,
            'line2' => $request->line2,
            'city' => $request->city,
            'state' => $request->state,
            'zip' => $request->zip,
        ]);

        return redirect()->route('success', ['type' => 'checkout']);
    }

    public function store(Request $request)
    {
        $user = $request->user();
        $paymentMethod = $request->input('payment-method');

        $user->update([
            'line1'       => $request->line1,
            'line2'       => $request->line2,
            'city'        => $request->city,
            'state'       => $request->state,
            'postal_code' => $request->postal_code,
        ]);

        
        //$user->checkout($stripe_name);
        //$user->newSubscription($stripe_name, $stripe_id)->create($paymentMethod);
        $servicePath = $request->session()->get('service_path');

        if ($servicePath == 'tax-preparation') $user->needsFileUpload();
        $request->session()->forget('service_path');
        return redirect()->route('success', ['type' => 'checkout']);
    }
}
