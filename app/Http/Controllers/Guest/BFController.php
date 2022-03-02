<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BFController extends Controller
{
    public function index()
    {
        if(!Auth::check()){  
            $request->session()->put('subscription_show', 2);
            return redirect()->route('register');
        }
        return view('guest.credit-restoration');
    }
}
