<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lib\Pricing;
use App\Models\User;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $user = User::find($request->session()->get('user_id'));
        $price = $this->getPrice($request);
        return view('guest.payment', [
                'intent' => $user->createSetupIntent(),
                'price' => $price
            ]);
    }

    public function payment(Request $request)
    {
        $user = User::find($request->session()->get('user_id'));
        //$user->subscription()->create(['name' => ]);


        //check if payment successful
            //if not successful

        //if successful
        return view('customer.success');

    }

    protected function getPrice(Request $request)
    {
        $pricing = Pricing::services();
        $service = $request->session()->get('service');
        $subscription = $request->session()->get('subscription');
        return $pricing['services'][$service][$subscription][$request->plan];
    }
} 
