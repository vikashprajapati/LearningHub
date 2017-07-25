<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use Session;
use App\Category;
use App\Tag;

class QuestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
     {
      $this->middleware('auth')->except('create');
     }
    public function index()
    {
        //
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
        return view('pages.qa')->withCategories($categories)->withTags($tags);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
          'ques'=>'required',
          'category' => 'required',
          'tags' => 'required|min:1|max:5',
          // 'tags.*' => 'required|max:25|unique:tags,title',
        ]);
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
        $question=new Question;
        $question->ques = $request->ques;
        $question->user_id=$request->user()->id;
        $question->category()->associate($category);
        $question->views=$question->views+1;
        $question->save();
        $question->tags()->sync($tags,false);
        Session::flash('success','The question was successfully posted');
        return redirect()->route('question.show', ['question'=>$question->id]);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Question $question)
    {
        return view('pages.qa')->withQuestion($question);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
