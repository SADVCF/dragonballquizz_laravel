<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Question;
use App\Models\Answer;
use App\Models\Result;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class QuizController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function start(Request $request)
    {
        $request->validate(['nickname' => 'required|string|max:255']);
        $user = User::firstOrCreate(['nickname' => $request->nickname]);
        session(['user_id' => $user->id]);
        return redirect()->route('quiz');
    }

    public function quiz()
    {
        $questions = Question::with('answers')->inRandomOrder()->distinct('id')->take(10)->get();
        return view('quiz', compact('questions'));
    }

    public function submit(Request $request)
    {
        $score = 0;
        $answers = json_decode($request->input('answers'), true); 
        foreach ($answers as $question_id => $answer_id) {
        $answer = Answer::find($answer_id);
        if ($answer && $answer->is_correct) {
            $score += 100;
        }
    }

        $user = User::find(session('user_id'));
        $user->results()->create(['score' => $score]);

        $ranking = Result::with('user')->orderByDesc('score')->take(10)->get();

        return view('result', compact('score', 'ranking'));
    }
}

