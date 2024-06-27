<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\AdminController;

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

Route::get('/personal', [UserController::class, 'index'])->middleware('auth')->name('personal');
Route::get('/personal/info', [UserController::class, 'info'])->middleware('auth');

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

Route::get('/category', [ServicesController::class, 'categories']);
Route::get('/category/{id}', [ServicesController::class, 'category']);
Route::get('/category/services/{id}', [ServicesController::class, 'service']);
Route::post('/subscription/{subId}', [ServicesController::class, 'purchase'])->middleware('auth');

Route::view('/adm/usr', 'admin.user')->middleware('admin');
Route::view('/adm/shf', 'admin.grafik')->middleware('admin');
Route::view('/adm/sbs', 'admin.abon')->middleware('admin');

Route::get('/adm/srv', [AdminController::class, 'service'])->middleware('admin');

