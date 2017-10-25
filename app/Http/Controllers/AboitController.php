<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use View;

class AboitController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stories = Post::all();
        return View::make('aboit_home_with_php', compact('stories'));
    }
}
