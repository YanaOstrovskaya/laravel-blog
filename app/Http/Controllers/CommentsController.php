<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\Post;

class CommentsController extends Controller
{
           public function store(Post $post)
    {


    	//add a comment to a post
    	$this->validate(request(), [

    		'body' => 'required|min:2'

    	]);


    	$post->addComment(request('body'));

    	 return back();



    }
}
