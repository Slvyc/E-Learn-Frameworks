<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', function () {
    return view('home');
})->name('home');

// Route::get('/framework', function () {
//     return view('framework');
// })->name('framework');

Route::get('/framework', function () {
    $frameworks = App\Models\Frameworks::all();
    return view('framework', compact('frameworks'));
})->name('framework');


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

Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
