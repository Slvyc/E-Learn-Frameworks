<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Framework;
use App\Http\Controllers\FrameworkController;
use App\Http\Controllers\UserProgressController;
use Doctrine\DBAL\Driver\Middleware;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/framework', function () {
//     return view('framework');
// })->name('framework');

// Route::get('/framework', function () {
//     $frameworks = App\Models\Frameworks::all();
//     return view('framework', compact('frameworks'));
// })->name('framework');

Route::get('/framework', [Framework::class, 'index'])->name('framework');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/laravelTutorial', function () {
    return view('laravelTutorial');
})->name('laravelTutorial');

Route::get('/instalationLaravel', function () {
    return view('instalationLaravel');
})->name('instalationLaravel');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/tutor', function () {
    return view('tutor');
})->name('tutor');

Route::get('/sementara', function () {
    return view('learning.chapter1');
})->name('sementara');

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Routes untuk learning functionality
Route::group(['prefix' => 'learn', 'middleware' => 'auth'], function () {

    // Route untuk tombol "Learn more" - langsung ke chapter 1
    Route::get('/{framework}/start', [FrameworkController::class, 'startLearning'])
        ->name('learning.start');

    // Route untuk menampilkan chapter
    Route::get('/{framework}/{chapter}', [FrameworkController::class, 'showChapter'])
        ->name('chapter.show');

    // Route alternatif untuk langsung ke section pertama
    Route::get('/{framework}/begin', [FrameworkController::class, 'startLearningDirect'])
        ->name('learning.begin');

    // Route untuk menampilkan section spesifik
    Route::get('/{framework}/{chapter}/section/{section}', [FrameworkController::class, 'showSection'])
        ->name('learning.section');
});

// Route untuk menampilkan framework detail
Route::get('/framework/{framework}', [FrameworkController::class, 'show'])
    ->name('framework.show');

// Route untuk menampilkan progress user
Route::get('/my-progress', [UserProgressController::class, 'index'])->middleware('auth')->name('user.progress');