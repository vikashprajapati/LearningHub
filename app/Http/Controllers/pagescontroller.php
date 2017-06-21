<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;


class pagescontroller extends Controller
{
public function getindex(Request $request){
  //if(!isset($request->sortby))
    $posts = Post::all();
  //else if( $request->sortby === "featured"){
    //$post = Post::where();
  return view('pages.welcome')->withPosts($posts);
}
public function nav(){
  return view('partials._n');
}
public function getresources(){
  $first = 'vikash';
  $last = 'prajapati';
  $full = $first." ".$last;
  return view('pages.resources')->withFull($full);
}
public function forum(){
    $posts = Post::all();
  return view('pages.forum')->withPosts($posts);
}

}

 ?>
