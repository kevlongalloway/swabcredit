<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Lib\Pricing;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;


class CRController extends Controller
{
    
    public function index(Request $request)
    {
        if(!Auth::check()){  
            $request->session()->put('subscription_show', 1);
            return redirect()->route('register');
        }
        return view('guest.credit-restoration');
    }


    
    public function store(Request $request)
    {
       $subscription = Product::find($request->subscription);
       $plan = $subscription->plans()->where('name' ,$request->plan)->first();

        return view('guest.payment', [
            'intent' => auth()->user()->createSetupIntent(),
            'price' => $plan->price,
            'service' => 'Credit Restoration',
            'product' => $subscription->name,
        ]);
            
    }

}
