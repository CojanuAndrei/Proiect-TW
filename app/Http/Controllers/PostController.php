<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;


class PostController extends Controller
{
   
    public function getDashboard()
    {
        $posts = Post::all();
        $comments = Comment::all();
        return view('dashboard',['posts'=> $posts, 'comments'=> $comments]);
    }
    
    public function getMyPosts()
    {
        $posts = Post::all();
        $comments = Comment::all();
        return view('my_posts',['posts'=> $posts, 'comments'=> $comments]);
    }


    public function postCreatePost(Request $request)
    {
        //Valid
        $this->validate($request, [
            'body' => 'required|max:1000'
        ]);
        $post = new Post();
        $post->title = $request['title'];
        $post->body = $request['body'];
        $message = 'There was an error';
       if ($request->user()->posts()->save($post)) {
            $message = 'Post successfully created!';
        }
        return redirect()->route('dashboard')->with(['message' => $message]);


    }
}