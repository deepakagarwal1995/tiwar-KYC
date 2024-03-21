<?php

namespace App\Http\Middleware;

use App\Models\Roles;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::check()){
            if(Auth::user()->role_id===Roles::where('name','admin')->first()->id){
                return $next($request);
            }
             if(Auth::user()->role_id===Roles::where('name','tl')->first()->id){
                return $next($request);
            }
             if(Auth::user()->role_id===Roles::where('name','agent')->first()->id){
                return $next($request);
            }
        }
        abort(403,'Access denied');
    }
}
