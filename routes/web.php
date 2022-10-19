<?php

use App\Http\Controllers\Frontend\CourseController;
use App\Http\Controllers\Frontend\HomePageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Home Page Routes
Route::get('/', [HomePageController::class, 'homePage'])->name('home');

// Course List Page Routes
Route::get('/courses', [CourseController::class, 'index'])->name('course.index');
Route::get('/courses/show', [CourseController::class, 'show'])->name('course.show');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
