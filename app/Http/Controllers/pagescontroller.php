<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
use App\Comment;


class pagescontroller extends Controller
{

  //controller for homepage
  public function home(Request $request){
    //if(!isset($request->sortby))
    $posts = Post::orderBy('views','desc')->paginate(3);
    $postsNew = Post::orderBy('created_at','desc')->paginate(3);
    // $posts=Post::paginate(3);
    //else if( $request->sortby === "featured"){
    //$post = Post::where();
    $comments=Comment::all();
    return view('pages.welcome')->withPosts($posts)->withComments($comments)->withPostsnew($postsNew);
  }

  //controller for forum page
  public function forum(){
    $posts = Post::all();
    return view('pages.forum')->withPosts($posts);
  }

  //controller for resouces page
  public function resources(){
    $resources = array('Video Lectures','Digital Library','PDF notes','Question Banks','Photos','Documents');
    return view('pages.resources')->withResources($resources);
  }

 public function trynav()
{
  # code...
  return view('partials.nav');
}
public function profile()
{
  # code...
  return view('pages.profile');
}
public function video()
{
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

// public function qa()
// {
//   $qatopic = [
//     [
//       'question' => 'What is algae and what are its functions',
//       'ans' => 'its a unicellular organism',
//       'posted-on' => '8 minutes ago',
//       'answers' => "8",
//       'helped' => "4",
//       'views' => "67",
//       'shares' => "12",
//     ],
//     [
//       'question' => 'What is algae and what are its functions',
//       'ans' => 'its a unicellular organism',
//       'posted-on' => '8 min ago',
//       'answers' => "8",
//       'helped' => "4",
//       'views' => "67",
//       'shares' => "12",
//     ],
//     [
//       'question' => 'What is algae and what are its functions',
//       'ans' => 'its a unicellular organism',
//       'posted-on' => '8 minutes ago',
//       'answers' => "8",
//       'helped' => "4",
//       'views' => "67",
//       'shares' => "12",
//     ],
//     [
//       'question' => 'What is algae and what are its functions',
//       'ans' => 'its a unicellular organism',
//       'posted-on' => '8 minutes ago',
//       'answers' => "8",
//       'helped' => "4",
//       'views' => "67",
//       'shares' => "12",
//     ],
//     [
//       'question' => 'What is algae and what are its functions',
//       'ans' => 'its a unicellular organism',
//       'posted-on' => '8 minutes ago',
//       'answers' => "8",
//       'helped' => "4",
//       'views' => "67",
//       'shares' => "12",
//     ],
//     [
//       'question' => 'What is algae and what are its functions',
//       'ans' => 'its a unicellular organism',
//       'posted-on' => '8 minutes ago',
//       'answers' => "8",
//       'helped' => "4",
//       'views' => "67",
//       'shares' => "12",
//     ],
//   ];
//   return view('pages.qa')->withQatopic($qatopic);
// }

public function viewquestion()
{
  # code...
  return view('pages.vqa');
}
}
?>
