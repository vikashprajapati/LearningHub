<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Like;
use App\User;
use App\Post;
use Auth;

class likeController extends Controller
{
    //
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function like(Request $request)
    {
      $post=Post::find($request->post_id);
      $user=Auth::user();
      $post->user->points+=1;
      $post->user->save();
      $like = new Like;
      $like->post()->associate($post);
      $like->user()->associate($user);
      $like->save();
      return back();
    }
}
