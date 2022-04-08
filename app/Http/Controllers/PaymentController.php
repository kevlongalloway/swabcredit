<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Service;
use Nikolag\Square\Facades\Square;
use Nikolag\Square\Models\Customer;

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

    public function charge()
    {
        $customerArr =[
            'first_name' => '',
            'last_name' => '',
            'email' => '',
            'phone' => '',
         ];

         $customer = new Customer($customerArr);
         $customer->save();

         $transaction = Square::charge([

        ]);

        $user->update([
            'line1'       => $request->line1,
            'line2'       => $request->line2,
            'city'        => $request->city,
            'state'       => $request->state,
            'postal_code' => $request->postal_code,
        ]);


        $request->session()->forget('service_path');

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
