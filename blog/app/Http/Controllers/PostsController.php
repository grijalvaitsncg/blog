<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index(){
        return view('admin.posts');
    }
    public function showAdd(){
        //http://127.0.0.1:8000/dashboard/posts/actions/add
        return view('admin.post_add');
    }
}
