<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Lib\Pricing;
use App\Models\User;
use Illuminate\Http\Request;

class CRController extends Controller
{
    public $service = 'credit-restoration';
    protected $user;


    //first login form 
    public function index()
    {
        return view('guest.credit-restoration');
    }
    //first login form post and return view payment plan 
    public function store(Request $request)
    {
        $user = User::create($request->all());
        $user->createAsStripeCustomer();
        $request->session()->put('user_id', $user->id);
        $request->session()->put('service', $this->service);
        $request->session()->put('subscription', $request->subscription);



        $plans = $this->getPlans($request);

        return view('guest.payment-plan')
            ->with('plans', $plans);
    }


    protected function getPlans(Request $request)
    {
        $pricing = Pricing::services();
        return $pricing['services'][$this->service][$request->subscription];
    }
}
