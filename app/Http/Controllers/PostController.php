<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;
use App\Comment;
use Session;
use App\Category;
use App\Tag;

class PostController extends Controller
{

    public function __construct(){
      $this->middleware('auth')->except('show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
        return view('posts.index')->withPosts($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $tags=Tag::all();
        return view('posts.newthread')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,array(
        'title' =>'required| max:255',
        'body'  =>'required',
        'category' => 'required|unique:categories,category',
        'tags' => 'required|min:1|max:5',
        'tags.*' => 'required|max:25|unique:tags,title',
        )
      );
      $category = Category::find($request->category);
      if($category === null){
        $category = new Category;
        $category->category = $request->category;
        $category->save();
      }

      $tags = $request->tags;
      for($i=0; $i<count($tags); $i++ ) {
        $tag = Tag::find($tags[$i]);
        if($tag === null) {
          $tag = new Tag;
          $tag->title = $tags[$i];
          $tags[$i] = $tag->save();
        }
      }

      $post=new Post;
      $post->title = $request->title;
      $post->body = $request->body;
      $post->user_id = $request->user()->id;
      $post->category()->associate($category);
      $post->views=$post->views+1;
      $post->save();
      $post->tags()->sync($tags,false);
      Session::flash('success','The blog post successfully saved');
      return redirect()->route('posts.show', ['post'=>$post->id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        $post->views++;
        $post->save();
        $comments=Comment::where('post_id',$post->id)->orderBy('created_at','desc')->get();
        return view('posts.viewpost')->withPost($post)->withComments($comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post=Post::find($id);
        $categories=Category::all();
        $tags=Tag::all();
        $tags2=array();
        foreach ($tags as $tag) {
          # code...
          $tags2[$tag->id]=$tag->name;
        }
        return view('posts.edit')->withPost($post)->withCategories($categories)->withTags($tags);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
          $this->validate($request,array(
          'title' =>'required| max:255',
          'body'  =>'required',
          'category' => 'required|unique:categories,category',
          'tags' => 'required|min:1|max:5',
          'tags.*' => 'required|max:25|unique:tags,title',
          )
        );
        $category = Category::find($request->category);
        if($category === null){
          $category = new Category;
          $category->category = $request->category;
          $category->save();
        }

        $tags = $request->tags;
        for($i=0; $i<count($tags); $i++ ) {
          $tag = Tag::find($tags[$i]);
          if($tag === null) {
            $tag = new Tag;
            $tag->title = $tags[$i];
            $tags[$i] = $tag->save();
          }
        }
        $post=Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = $request->user()->id;
        $post->category()->associate($category);
        $post->views=$post->views+1;
        $post->save();
        $post->tags()->sync($tags,false);
        Session::flash('success','The blog post Save');
        return redirect()->route('posts.show', ['post'=>$post->id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post=Post::find($id);
        $post->delete();
    }
}
