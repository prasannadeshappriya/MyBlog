<?php

namespace App\Http\Middleware;

use Closure;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(($request->session()->get('status'))===null){
            return redirect('dashboard');
        }
        if(($request->session()->get('status'))==='admin'){
            return $next($request);;
        }
        return redirect('dashboard');
    }
}
