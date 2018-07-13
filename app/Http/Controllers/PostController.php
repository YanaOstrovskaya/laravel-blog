<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;

class PostController extends Controller
{
     
       public function index()
    {

    	//$posts = Post::all();

    	//to change the order
    	$posts = Post::latest();

        if($month = request('month')){
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = request('year')){
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();


        //собрать данные по месяцам и годам за посты
        //$archives = Post::archives();

             //dd($archives);

    	return view('posts.index', [

    		'posts' => $posts

    	]);
    }

       public function show(Post $post)
    {

    	//show($id)
    	//$post = Post::find($id);


    	return view('posts.show',
    		[
    			'post' => $post
    		]);
    }

       public function create()
    {

    	return view('posts.create');
    }

       public function store()
    {

    	// $post = new Post;
    	// $post->title = request('title');
    	// $post->body = request('body');

    	// $post->save();

    	// return redirect('/');


    	//or
    	// Post::create([
    	// 	'title' => request('title'),
    	// 	'body' => request('body')

    	// ]);

    	// return redirect('/');


    	//or

    	//validate data
    	$this->validate(request(), [

    		'title' => 'required',
    		'body' => 'required'

    	]);



    	Post::create(request(['title', 'body']));

    	 return redirect('/');



    }

}
