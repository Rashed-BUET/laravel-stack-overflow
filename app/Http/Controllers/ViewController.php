<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

use App\Http\Requests;

class ViewController extends Controller
{
    public function index()
    {
        $questions = DB::table('users')
            ->join('questions', 'users.id', '=', 'questions.user_id')
            ->get();
        return view('welcome',[
           'questions' => $questions,
        ]);
    }
}
