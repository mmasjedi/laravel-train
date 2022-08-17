<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class RegisterController extends Controller
{

    public function list()
    {
        $data = DB::table('users')->select('*')->get();
        return view('register-list', compact('data'));

    }

    public function register()
    {
        return view('register');
    }

    public function id(\Illuminate\Http\Request $request)
    {
//      "name" => $request->name;
//      "family" => $request->family;
        return view('register');
        //return $request->all();
    }


    public function create(Request $request)
    {

        DB::table("users")->insert(
            [
                "name" => $request->name,
                "family" => $request->family,
                "mobile" => $request->mobile,
                "email" => $request->email,
                "website" => $request->website,
                "home_number" => $request->home_number,
            ]
        );
        return back();
//        return view('home2',compact('request'));
    }

    public function update($id, Request $request)
    {


        DB::table("users")->where("id", '=', $id)
            ->update([
        'name' => $request->name,
        'family' => $request->family,
        'mobile' => $request->mobile,
        'website' => $request->website,
        'email' => $request->email,
        'home_number' => $request->home_number
        ]);





        return redirect('/register-list');
    }

    public function edit($id)
    {
        $user = DB::table("users")->where("id", '=', $id)->first();
        return view('edit', compact("user"));

    }

    public function remove($id, Request $request)
    {

        DB::table("users")->where("id", '=', $id)
            ->delete();
        return redirect('/register-list');
    }


}
