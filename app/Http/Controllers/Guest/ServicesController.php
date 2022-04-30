<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Plan;
use App\Models\Product;

class ServicesController extends Controller
{

    /**
     * Display a listing of the resource.
     * @param Request $request
     * @param $servicePath string 
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request, $servicePath)
    {
        if(!auth()->check()){  
            $request->session()->put('service_path', $servicePath);
            return redirect()->route('register');
        }

        $user = auth()->user();
        $service = Service::where('path',$servicePath)->first();

        $user->services()->attach($service->id);

        if ($service->requiresPayment()) {
            return redirect('/checkout/'. $service->id); 
        }

        if ($service->requiresUpload()) {
            $user->makeFileUploadRequired();
            return redirect()->route('upload.index');
        }
        
        if($service->isSubscription()) {
            return view('guest.subscribe', ['service' => $service]); 
        }
    }

    /**
     * Resolve Product, Plan and price  
     * Redirect to Payment Page (guest.payment)
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->has('plan') && $request->has('subscription')) {
            $plan = Plan::find($request->plan);
            $data = [
                'price' => $plan->price,
                'service' => $plan->product()->first()->service()->first()->name,
                'product' => $plan->product()->first()->name,
                ];
        }
        if($request->has('plan') && !$request->has('subscription')) {
            $plan = Plan::find($request->plan);
            if($plan->service()->exists()) {
                $data = [
                'price' => $plan->price,
                'service' => $plan->service()->first()->name,
                ];
            }
            if($plan->product()->exists()) {
                $data = [
                'price' => $plan->price,
                'service' => $plan->product()->first()->name,
                ];
            }
        }
        if($request->has('subscription') && !$request->has('plan')) {
            $product = Product::find($request->subscription);
            $data = [
                'price' => $product->price,
                'service' => $product->name,
                ];
        } 
        return view('guest.payment', $data); 
    }
}
