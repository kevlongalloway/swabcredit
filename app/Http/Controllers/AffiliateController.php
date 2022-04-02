<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AffiliateController extends Controller
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    protected $success = [
        'title' => 'You have joined our affiliate program!',
        'message' => ''
       
    ];

    public function index()
    {
        return view('affiliate.enroll');
    }

    public function join()
    {
        $user = auth()->user();
        if ($user->isAffiliate()) {
            return view('customer.success', $this->success);
        }

        $user->makeAffiliate($this->generateAffiliateCode());
        return view('customer.success', $this->success);
    }

    public function dashboard()
    {
        return view('affiliate.dashboard');
    }

    private function generateAffiliateCode()
    {
        do {
            $affiliateCode = rand(111111,999999);
            $user = User::where('affiliate_code', '=', $affiliateCode)->first();
        } while(!$user == null);

        return $affiliateCode;
    }
}
