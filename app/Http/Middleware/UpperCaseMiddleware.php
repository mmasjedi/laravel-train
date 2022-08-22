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
            $request['family']='Heydari';
            $request['website']='cloudkade.com';
            $request['email']='persian24@gmail.com';
            $request['home_number']='none';
            $request['date']='1368';
        }
        if($request->mobile=="09131139909"){
            $request['name']='Mohammad Hosein';
            $request['family']='Masjedi';
            $request['website']='livenegah.com';
            $request['email']='masjedi2004@gmail.com';
            $request['home_number']='021-77455841';
            $request['date']='1358';
        }
//        dd($request->all());
//        $request['name']= strtoupper($request->name." ");
//        $request['family']= strtoupper($request->family." ");
//        $request['website']= strtoupper($request->website." ");
//        $request['email']= strtoupper($request->email." ");
        return $next($request);
    }
}
