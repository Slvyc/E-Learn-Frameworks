<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Framework;
use App\Http\Controllers\FrameworkController;
use App\Http\Controllers\UserProgressController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Learning\ChapterController;
use App\Http\Controllers\Learning\SectionController;
use App\Http\Controllers\UserSettingController;
use Doctrine\DBAL\Driver\Middleware;

Route::get('/', function () {
    return view('home');
})->name('home');

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

//route login register
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk mengelola user settings
Route::middleware('auth')->group(function () {
    Route::get('/setting', [UserSettingController::class, 'edit'])->name('user.setting');
    Route::post('/setting', [UserSettingController::class, 'update'])->name('user.setting.update');
});

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


//user route
// Route untuk menampilkan progress user (alternatif)
Route::get('/tutorial', [UserProgressController::class, 'index'])->middleware('auth')->name('user.progress');
// rute dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('user.dashboard');