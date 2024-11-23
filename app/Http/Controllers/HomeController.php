<?php
// app/Http/Controllers/HomeController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch all questions from the database
        $questions = Question::all();

        // Pass the questions data to the view
        return view('home', compact('questions'));
    }

    public function edit($id)
    {
        $question = Question::findOrFail($id);
        return view('edit', compact('question'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'question' => 'required|string',
            'options' => 'required|string', // 'options' should be a string as it is a comma-separated list in the form
            'answer' => 'required|string',
            'info' => 'nullable|string',
        ]);

        $question = Question::findOrFail($id);
        $question->update([
            'question' => $request->input('question'),
            'options' => explode(',', $request->input('options')), // Convert string to array
            'answer' => $request->input('answer'),
            'info' => $request->input('info'),
        ]);

        return redirect()->route('home')->with('success', 'Question updated successfully.');
    }

    public function destroy($id)
    {
        $question = Question::findOrFail($id);
        $question->delete();

        return redirect()->route('home')->with('success', 'Question deleted successfully.');
    }
}
