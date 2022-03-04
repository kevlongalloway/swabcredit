<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
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
    }
}
