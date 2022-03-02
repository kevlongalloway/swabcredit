<?php
 
namespace App\Http\Responses;
 
use Laravel\Fortify\Contracts\RegisterResponse as RegisterResponseContract;
use App\Models\Service;
 
class RegisterResponse implements RegisterResponseContract
{
    /**
     * @param  $request
     * @return mixed
     */
    public function toResponse($request)
    {
        if($request->session()->has('subscription_show')) {
            $service = Service::find($request->session()->get('subscription_show'));
            return redirect()->route($service->route);
        }
        
        return redirect()->route('dashboard');
    }
}