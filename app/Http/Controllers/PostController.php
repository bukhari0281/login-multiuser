<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $post = "l";
        return view('admin', ['post'=>$post]);
    }
}
