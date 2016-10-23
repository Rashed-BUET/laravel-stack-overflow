<?php

namespace App\Http\Controllers;

use App\Question;
use App\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function createTagView(Request $request)
    {
        return view('createTag');
    }
    public function createTag(Request $request)
    {
        $tag = new Tag;
        $tag->tag = $request->tag;
        $tag->save();

        return redirect('/home');
    }
    public function postQuestionView()
    {
        return view('postQuestion');
    }
    public function postQuestion(Request $request)
    {
        $ques = new Question;
        $ques->user_id = $request->user()->id;
        $ques->title = $request->title;
        $ques->body = $request->body;
        $ques->votes = 0;
        $ques->views = 0;
        $ques->save();
        return redirect('/home');
    }
}
