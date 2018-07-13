<?php

namespace App;

use Carbon\Carbon;

class Post extends Model
{

    public function comments()

    {
    	return $this->hasMany(Comment::class);
    }


    public function addComment($body)//this methood use in controller

    {

    	//    Comment::create([

    	// 	'body' => $body,
    	// 	'post_id' => $this->id


    	// ]);


    	//используя связь с дrугой моделью

    	$this->comments()->create(['body'=> $body]);
    }


    public static function archives()
    {
       return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
             ->groupBy('year', 'month')
             ->orderByRaw('min(created_at) desc')
             ->get()
             ->toArray();
    }



}
