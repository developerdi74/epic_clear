<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminPanelMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user() == null){
            return redirect()->route('home.index');
        }else{
            if(auth()->user()->role !== 'admin'){
                return redirect()->route('home.index');
            }else{
                return $next($request);
            }
        }
    }
}
