<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
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

Route::get('register', [UserController::class, 'register'])->name('register');

Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'loginValidate'])->name('login');

Route::get('forgot-password', [UserController::class, 'forgotPassword'])->name('forgot-password');
Route::get('forgot-password/{token}', [UserController::class, 'forgotPasswordValidate']);
Route::post('forgot-password', [UserController::class, 'resetPassword'])->name('forgot-password');

Route::put('reset-password', [UserController::class, 'updatePassword'])->name('reset-password');

Route::get('/', function () {
    return view('welcome');
});
