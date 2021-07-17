<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkDevUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $value=$request->session()->get('id',0);
        if($value==0){
            return redirect('/userlogin');
        }
        return $next($request);
    }
}
