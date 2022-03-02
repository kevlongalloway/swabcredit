<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Service;

class ServiceExists
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $servicePath = $request->route()->parameters()['servicePath'];
        //security
        $serviceExists = 0;
        $services = Service::all();
        foreach($services as $s) {
            if($s->path == $servicePath) {
                $serviceExists++;
            }
        }
        if(!$serviceExists) {
            abort(404);
        }
        return $next($request);
    }
}
