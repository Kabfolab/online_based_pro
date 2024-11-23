<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class StudentController extends Controller
{
    public function fetchQuestions()
{
    $questions = Question::all();
    return view('student', [
        'questions' => $questions
    ]);
}

}
