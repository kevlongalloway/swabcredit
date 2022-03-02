<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;

class LandingController extends Controller
{
    public function index()
    {
        return view('welcome', [
            'services' => Service::all()
        ]);
    }
}
