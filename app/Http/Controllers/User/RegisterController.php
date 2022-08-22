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



    public function create(Request $request)
    {
        if($request->name==null || $request->family==null || $request->mobile==null) {


            return back()->withErrors(['msg' => 'فیلد های نام ، فامیل و موبایل اجباری است ']);

        }

        else

        DB::table("users")->insert(
            [
                "name" => $request->name,
                "family" => $request->family,
                "mobile" => $request->mobile,
                "email" => $request->email,
                "website" => $request->website,
                "home_number" => $request->home_number,
                "date" => $request->date




            ]
        );
        return redirect('register/register-list');

        //        return back();
//        return view('home2',compact('request'));
    }

    public function update($id, Request $request)
    {
        if($request->name==null || $request->family==null || $request->mobile==null) {


            return back()->withErrors(['msg' => 'please insert name']);

        }
//        if($request->family==null)
//            return redirect('/edit/'. $id);

        else
            DB::table("users")->where("id", '=', $id)
                ->update([
                    'name' => $request->name,
                    'family' => $request->family,
                    'mobile' => $request->mobile,
                    'website' => $request->website,
                    'email' => $request->email,
                    'home_number' => $request->home_number
                ]);

        return redirect('register/register-list');
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
        return redirect('register/register-list');
    }


}
