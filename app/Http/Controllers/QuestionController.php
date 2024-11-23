<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class QuestionController extends Controller
{
    public function create()
{
    return view('welcome');
}


public function store(Request $request)
{
    // Validate the form data.
    $validatedData = $request->validate([
        'question_no' => 'required|string',
        'question' => 'required|string',
        'options' => 'required|array', // Change this line to validate 'options' as an array
        'answer' => 'required|string',
        'info' => 'nullable|string',
    ]);
    
    $question = new Question();
    $question->question_no = $validatedData['question_no'];
    $question->question = $validatedData['question'];
    $question->options = $validatedData['options']; // Assign the 'options' from the validated data
    $question->answer = $validatedData['answer'];
    $question->info = $validatedData['info'];
    $question->save();
    
    // Redirect the teacher to a confirmation page or back to the form.
    return redirect()->route('question.create')->with('success', 'Question added successfully');
}




    

}