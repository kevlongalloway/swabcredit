<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;

class ServicesController extends Controller
{
    public function index(Request $request, $servicePath)
    {
        $service = Service::where('path',$servicePath)->first();
        
        if(!$service->is_subscription) {
            return view('guest.payment', [
                'intent' => auth()->user()->createSetupIntent(),
                'price' => $service->price,
                'service' => $service->name
            ]);  
        }

        return view('guest.subscribe', ['service' => $service]);
    }
}
