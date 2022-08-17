<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
//    pubf + tab
    // control + alt +  L moratab sazi
    public function list(Request $request )
    {


        $data =[
            [
                "name" => $request->name,
                "age" => 22
            ],
            [
                "name" => "reza",
                "age" => 33
            ],
            [
                "name" => "javad",
                "age" => 44
            ],
            [
                "name" => "hasan",
                "age" => 45
            ],
        ];
//return $data;

        return view('user.list',compact('data'));
    }

    public function home(Request $request)
    {
        return view('home');

    }
    public function create(Request $request)
    {

        return view('home2',compact('request'));


    }

    public function update()
    {

    }

    public function remove()
    {

    }
}
