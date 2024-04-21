<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AuthController;
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

Route::get('/', [ItemController::class, 'index'])->name('home');
Route::get('/detail/{id}', [ItemController::class, 'detail'])->name('detail');
Route::get('/sale/{id}', [PurchaseController::class, 'index'])->name('sale');
Route::get('/register_address', [PurchaseController::class, 'address'])->name('register_address');
Route::get('/comment/{id}', [CommentController::class, 'create'])->name('comment');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::get('/mypage', [UserController::class, 'mypage'])->name('mypage');