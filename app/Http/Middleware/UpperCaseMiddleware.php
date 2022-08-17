<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UpperCaseMiddleware
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

//dd($request->all());   ctrl + ? comment

        if($request->mobile=="09126145705"){
            $request['name']='alireza';
        }
        if($request->mobile=="09131139909"){
            $request['name']='mohammad';
        }
//        dd($request->all());
        $request['name']= strtoupper($request->name." ");

        return $next($request);
    }
}
