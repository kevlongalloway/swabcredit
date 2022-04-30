<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class NeedsFileUpload
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
        if(auth()->user()->requiresUpload() && !auth()->user()->isAdmin()) {
            return redirect()->route('upload.index');
        }
        return $next($request);
    }
}
