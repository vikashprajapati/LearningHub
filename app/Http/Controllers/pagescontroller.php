<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;


class pagescontroller extends Controller
{

  //controller for homepage
  public function home(Request $request){
    //if(!isset($request->sortby))
    $posts = Post::all();
    //else if( $request->sortby === "featured"){
    //$post = Post::where();
    return view('pages.welcome')->withPosts($posts);
  }



  //controller for forum page
  public function forum(){
    $posts = Post::all();
    return view('pages.forum')->withPosts($posts);
  }



  //controller for resouces page
  public function resources(){
    $resources = array('Video Lectures','Digital Library','PDF notes','Question Banks','Photos','','Documents');
    return view('pages.resources')->withResources($resources);
  }



//controller for store page
public function store()
{
  return view('pages.store');
}
}
?>
