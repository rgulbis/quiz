<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index() {
        $topics = Topic::all();
        return view('menu', ['topics' => $topics]);
    }

        public function quiz(Request $request, $table) {
    // Initialize session if quiz questions not set
    if (!$request->session()->has('quiz.questions')) {
        $questions = DB::table($table)->inRandomOrder()->get();
        $request->session()->put('quiz.questions', $questions->pluck('id')->toArray());
        $request->session()->put('quiz.index', 0);
        $request->session()->put('quiz.score', 0);
        $request->session()->put('quiz.table', $table);
    }

    $questionsIds = $request->session()->get('quiz.questions');

    // If no questions available, reset and redirect with alert
    if (empty($questionsIds)) {
        $request->session()->forget(['quiz.questions', 'quiz.index', 'quiz.score', 'quiz.table']);
        return redirect('/')
            ->with('error', 'The quiz is not available yet.');
    }

    $index = $request->session()->get('quiz.index', 0);
    $score = $request->session()->get('quiz.score', 0);

    if ($request->isMethod('post')) {
        $selected = $request->input('answer');
        $currentQuestionId = $questionsIds[$index];
        $currentQuestion = DB::table($table)->where('id', $currentQuestionId)->first();

        if ($selected && $selected === $currentQuestion->correct) {
            $score++;
            $request->session()->put('quiz.score', $score);
        }

        $index++;

        if ($index >= count($questionsIds)) {
    $user = Auth::user();
    $column = $table;

    DB::table('high_scores')->updateOrInsert(
        ['user_id' => $user->id],
        [$column => max($score, DB::table('high_scores')->where('user_id', $user->id)->value($column) ?? 0)]
    );

    $leaderboard = DB::table('high_scores')
        ->join('users', 'high_scores.user_id', '=', 'users.id')
        ->select('users.name as user_name', "high_scores.{$table} as score")
        ->whereNotNull("high_scores.{$table}")
        ->orderByDesc("high_scores.{$table}")
        ->limit(10)
        ->get();

    $request->session()->forget(['quiz.questions', 'quiz.index', 'quiz.score', 'quiz.table']);

    return view('result', [
        'score' => $score,
        'total' => count($questionsIds),
        'table' => $table,
        'leaderboard' => $leaderboard,
    ]);
}


        $request->session()->put('quiz.index', $index);
    }

    $currentQuestionId = $questionsIds[$index];
    $currentQuestion = DB::table($table)->where('id', $currentQuestionId)->first();

    if (!$currentQuestion) {
        // Log error or clear session and redirect to quiz start
        \Log::warning("Question ID $currentQuestionId not found in table $table.");
        
        session()->forget(['quiz.questions', 'quiz.index', 'quiz.score', 'quiz.table']);
        
        return redirect("/quiz/{$table}")->with('error', 'Quiz data out of sync, restarting quiz.');
    }


    $answers = collect([
        $currentQuestion->correct,
        $currentQuestion->false1,
        $currentQuestion->false2,
        $currentQuestion->false3,
    ])->shuffle();

    return view('quiz', [
        'question' => $currentQuestion,
        'answers' => $answers,
        'score' => $score,
        'questionNumber' => $index + 1,
        'totalQuestions' => count($questionsIds),
        'table' => $table
    ]);
}



    public function redirectToQuiz(Request $request) {
        $table = $request->input('topic_table_name');
        return redirect("/quiz/{$table}");
    }
}
