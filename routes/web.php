<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
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

/** DASHBOARD **/
Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/about', [DashboardController::class, 'aboutUs'])->name('about');
Route::get('/contact', [DashboardController::class, 'contactUs'])->name('contact');
Route::get('/booking', [DashboardController::class, 'booking'])->name('booking');
Route::get('/gallery', [DashboardController::class, 'gallery'])->name('gallery');


// Login, Logout, Register
Route::get('/login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'login']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/registration', [UserController::class, 'registration'])->middleware('guest')->name('registration');
Route::post('/registration', [UserController::class, 'saveRegistration']);

// Tampilan setelah login sukses
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


/** ADMIN **/
Route::group(['prefix' => 'admin', 'as' => 'admin.'], function() {
    /** PENGGUNA **/
    Route::group(['prefix' => 'pengguna', 'as' => 'pengguna.'], function() {
        Route::get('/', [AdminController::class, 'listPengguna'])->name('index');
        Route::get('/create', [AdminController::class, 'tambahPengguna'])->name('create');
        Route::get('/{id}/edit', [AdminController::class, 'editPengguna'])->name('edit');
    });
});


// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/test', function () {
    //     return view('layouts.index');
// });

// Auth::routes();