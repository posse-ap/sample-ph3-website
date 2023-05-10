<?php

namespace App\Http\Controllers;

use App\Models\Quiz;

class QuizController extends Controller
{
    public function index()
    {
        $quizzes = Quiz::get();
        return view('user.quizzes.index', compact('quizzes'));
    }

    public function detail(Quiz $quiz)
    {
        $quizWithQuestionsAndChoices = $quiz->load('questions.choices');
        return view('user.quizzes.detail', ['quiz' => $quizWithQuestionsAndChoices]);
    }
}
