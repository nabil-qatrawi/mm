<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class postController extends Controller
{
    public function index() {
        $post=DB::table('posts')->get();
 return view ('index',compact ('post'));
    }

    public function show($id) {

       $post = DB::table('posts')->find($id);
       return view('show', compact('post'));

    }

}
