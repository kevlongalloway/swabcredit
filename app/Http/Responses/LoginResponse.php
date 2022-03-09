<?php
 
namespace App\Http\Responses;
 
use Laravel\Fortify\Contracts\LoginResponse as LoginResponseContract;
use App\Models\Service;
 
class LoginResponse implements LoginResponseContract
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