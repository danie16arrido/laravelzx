<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostsController extends Controller
{
    public function index(){
        return view('posts.index');
    }

    public function show(){
        return view('posts.show');
    }

    public function create(){
        return view('posts.create');
    }

    public function store(){
        //create a new post using the request data
        // dd(request(['title', 'body']));
        // $post = new Post;
        // $post->title = request('title');
        // $post->body = request('body');
        // //save it to to the DB
        // $post->save();
        Post::create([
            'title' => request('title'),
            'body' => request('body')
        ]);
        //redirect  
        return redirect('/');

    }
}
