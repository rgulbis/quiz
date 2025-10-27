<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


require __DIR__.'/auth.php';

Route::get('/login', [AuthController::class, 'index'])->name("login")->middleware("guest");

Route::get('/', [HomeController::class, 'index'])->middleware("auth");
Route::get('/menu', [HomeController::class, 'index'])->middleware("auth");

Route::post('/quiz', [HomeController::class, 'redirectToQuiz'])->middleware('auth');
Route::match(['get', 'post'], '/quiz/{table}', [HomeController::class, 'quiz'])->middleware('auth');

Route::get('/quiz/restart/{table}', function ($table, Request $request) {
    // Clear quiz session data so quiz restarts fresh
    $request->session()->forget(['quiz.questions', 'quiz.index', 'quiz.score', 'quiz.table']);

    // Redirect to quiz route, starting fresh
    return redirect("/quiz/{$table}");
})->name('quiz.restart');

Route::get('/leaderboard/{table}', function ($table) {
    $leaderboard = DB::table('high_scores')
        ->join('users', 'high_scores.user_id', '=', 'users.id')
        ->select('users.name as user_name', "{$table} as score")
        ->whereNotNull("{$table}")
        ->orderByDesc("{$table}")
        ->limit(10)
        ->get();

    return response()->json($leaderboard);
});