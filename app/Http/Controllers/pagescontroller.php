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

//controller for viewing posts
public function vpost()
{
  # code...
  return view('pages.viewpost');
}

public function profile()
{
  # code...
  return view('pages.profile');
}
public function video()
{
<<<<<<< HEAD
<<<<<<< HEAD
  $subjects = [
    [
      'name' => 'Zoo',
      'image' => 'images/motherboard_450.jpg',
      'desc' => 'Contents related to botany.',
    ],
    [
      'name' => 'Chemistry',
      'image' => 'images/maths.jpg',
      'desc' => 'Contents related to chemicals.',
    ],
    [
      'name' => 'Botany',
      'image' => 'images/maths.jpg',
      'desc' => 'Contents related to botany.',
    ],
    [
      'name' => 'Maths',
      'image' => 'images/maths.jpg',
      'desc' => 'Contents related to botany.',
    ],
    [
      'name' => 'Computer',
      'image' => 'images/motherboard_450.jpg',
      'desc' => 'Contents related to botany.',
    ],
    [
      'name' => 'technology',
      'image' => '/images/maths.jpg',
      'desc' => 'contents related to tech',
    ],
    [
      'name' => 'Physics',
      'image' => '/images/motherboard_450.jpg',
      'desc' => 'Contents related to physics.',
    ],
    [
      'name' => 'Electronics',
      'image' => 'images/motherboard_450.jpg',
      'desc' => 'Electronic components.',
    ],
  ];
  return view('pages.video')->withSubjects($subjects);
}
public function qa()
{
  $qatopic = [
    [
      'question' => 'What is algae and what are its functions',
      'ans' => 'its a unicellular organism',
      'posted-on' => '8 minutes ago',
      'answers' => "8",
      'helped' => "4",
      'views' => "67",
      'shares' => "12",
    ],
    [
      'question' => 'What is algae and what are its functions',
      'ans' => 'its a unicellular organism',
      'posted-on' => '8 min ago',
      'answers' => "8",
      'helped' => "4",
      'views' => "67",
      'shares' => "12",
    ],
    [
      'question' => 'What is algae and what are its functions',
      'ans' => 'its a unicellular organism',
      'posted-on' => '8 minutes ago',
      'answers' => "8",
      'helped' => "4",
      'views' => "67",
      'shares' => "12",
    ],
    [
      'question' => 'What is algae and what are its functions',
      'ans' => 'its a unicellular organism',
      'posted-on' => '8 minutes ago',
      'answers' => "8",
      'helped' => "4",
      'views' => "67",
      'shares' => "12",
    ],
    [
      'question' => 'What is algae and what are its functions',
      'ans' => 'its a unicellular organism',
      'posted-on' => '8 minutes ago',
      'answers' => "8",
      'helped' => "4",
      'views' => "67",
      'shares' => "12",
    ],
    [
      'question' => 'What is algae and what are its functions',
      'ans' => 'its a unicellular organism',
      'posted-on' => '8 minutes ago',
      'answers' => "8",
      'helped' => "4",
      'views' => "67",
      'shares' => "12",
    ],
  ];
  return view('pages.qa')->withQatopic($qatopic);
=======
  # code...
  return view('pages.video');
}
public function qa()
{
  # code...
  return view('pages.qa');
>>>>>>> 9b7dc8e8c30750cb9d5b5642b221c22ce236a940
=======
  # code...
  return view('pages.video');
}
public function qa()
{
  # code...
  return view('pages.qa');
>>>>>>> parent of 0f97284... connection done
}
public function nt()
{
  # code...
  return view('pages.newthread');
}
}
?>
