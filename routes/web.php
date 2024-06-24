<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [MainController::class, 'index'])->name('mainpage');

Route::get('/laravel', function () {
    return view('welcome');
});

Route::view('/personal', 'personal.personal')->middleware('auth')->name('personal');

Route::get('/register', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'create'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::get('/logout', [LoginController::class, 'destroy'])->middleware('auth')->name('logout');

Route::view('/about', 'about');
Route::view('/review', 'companyReview');
Route::view('/food', 'foodproducts');
Route::view('/trainer', 'instructors');
Route::view('/contact', 'contacts');

Route::view('/category', 'serviceCategories');
Route::get('/category', [ServicesController::class, 'categories']);

