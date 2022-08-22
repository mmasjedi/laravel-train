<?php

namespace App\Http\Controllers\blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BlogController extends Controller
{
    public function list()
    {
        $data = DB::table('blog')->select('*')->get();
        return view('blog/blog', compact('data'));
        //        return view('blog/blog');

    }

    public function new()
    {
        return view('blog/blog_create');

    }

    public function create(Request $request)
    {

//        return $request->all();
        DB::table("blog")->insert(
            [
                "blog_name" => $request->blog_name,
                "title_head" => $request->title_head,
                "title_detail" => $request->title_detail,
                "date" => $request->date,
                "content" => $request->content,
                "image" => $request->image
            ]
        );

        return redirect('/blog');
//        return "blog pag312312313131e";

    }

    public function edit()
    {
//        return view('blog');
        return "blog pag312312313131e";

    }

    public function remove()
    {
//        return view('blog');
        return "blog pag312312313131e";

    }


}
