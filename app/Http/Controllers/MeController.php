<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use View;
use Input;
use Validator;
use Response;
use Redirect;

class MeController extends Controller
{
    public function getMyStories(){
    	$posts = Post::where('user_id', Auth::User()->id)->get();
    	return View::make('me.stories', compact('posts'));
    }
    public function editMyStory($id){
    	$post = Post::where('user_id', Auth::User()->id)->where('unique_id', $id)->first();
    	// var_dump($post);
    	return View::make('me.storyedit', compact('post'));
    }
    public function updateMyStory($id)
    {
        $input = array_except(Input::all(), '_method');
        $validation = Validator::make($input, Post::$rules);
    
        if ($validation->passes())
        {
            $post = Post::where('unique_id', $id)->first();
            $post->update($input);
    
            return Response::json(array('success' => true, 'errors' => '', 'message' => 'Post updated successfully.'));
        }
    
        return Response::json(array('success' => false, 'errors' => $validation, 'message' => 'All fields are required.'));
    }
}
