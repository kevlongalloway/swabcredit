<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CRController extends Controller
{
    public function index()
    {
        return view('customer.credit.upload');
    }
}
