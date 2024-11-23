<?php
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;


Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('/register', [RegisterController::class, 'register']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/admin/dashboard', [DashboardController::class, 'adminDashboard'])->name('admin.dashboard');
});

Route::middleware('auth')->group(function () {
    Route::get('/user/dashboard', [DashboardController::class, 'userDashboard'])->name('user.dashboard');
});


Route::get('/welcome', 'App\Http\Controllers\QuestionController@create')->name('question.create');
Route::post('/welcome', 'App\Http\Controllers\QuestionController@store')->name('question.store');

Route::get('/student', 'App\Http\Controllers\StudentController@fetchQuestions')->name('student.questions');

 Auth::routes();



// Route::get('/questions/{id}/edit', [App\Http\Controllers\HomeController::class, 'edit'])->name('questions.edit');
// Route::put('/questions/{id}', [App\Http\Controllers\HomeController::class, 'update'])->name('questions.update');
// Route::delete('/questions/{id}', [App\Http\Controllers\HomeController::class, 'destroy'])->name('questions.destroy');



Route::get('/meil', function () {
    $data = ['message' => 'This is a test message'];
    Mail::to('idreesgoke@gmail.com')->send(new TestMail($data));
    return 'Test mail sent!';
});

Route::get('/ext', function () {
    return view('ext');
});



Route::get('/test-email', function () {
    $data = ['message' => 'This is a test message'];
    
    try {
        Mail::to('idreesgoke@gmail.com')->send(new \App\Mail\TestMail($data));
        return 'Test mail sent successfully!';
    } catch (\Exception $e) {
        return 'Failed to send email: ' . $e->getMessage();
    }
});
