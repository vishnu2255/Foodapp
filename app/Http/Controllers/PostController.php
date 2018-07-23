<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function __construct()
    {
        return $this->middleware('auth');
    }

    public function show($id)
    {
        $post = Post::find($id);
    
        return view('showpost', compact('post'));
    }

    public function index()
    {
        $posts = Post::all();
        return view('posts')->with('posts',$posts);
    }

    public function create()
    {
        return view('post');
    }

    public function store(Request $request)
    {
        $post =  new Post;
        $post->title = $request->get('title');
        $post->body = $request->get('body');

        $post->save();

        return redirect('post1');

        // dd($request->all());
    }

}
