<?php

namespace App\Http\Controllers;
use App\Post;


class pagescontroller extends Controller
{
public function getindex(){
  $posts = Post::all();
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
  return view('pages.forum');
}
}


 ?>
