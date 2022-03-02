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
        if($request->session()->has('service_path')) {
            return redirect()->route('guest.services', ['servicePath' => $request->session()->get('service_path')]);
        }
        return redirect()->route('dashboard');
    }
}