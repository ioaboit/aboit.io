<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Auth;

class BlogsController extends Controller
{
	public function show(){
    	return view('blog.show');
    }

    public function blogList(){
    	return Blog::all();
    }

    public function newBlog(){
    	return view('blog.new');
    }

    public function createBlog(Request $request){
    	$request['user_id'] = Auth::id();
    	Blog::create($request->all());
    }
}
