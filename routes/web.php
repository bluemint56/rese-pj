<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ShopLikeController;
use App\Http\Controllers\ReservationController;

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

Route::get('/register', [AuthenticationController::class, 'showRegister']);
Route::post('/register', [AuthenticationController::class, 'register']);
Route::get('/thanks', [AuthenticationController::class, 'thanks']);
Route::get('/login', [AuthenticationController::class, 'showLogin']);
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout']);

Route::get('/mypage', [UserController::class, 'index']);

Route::get('/', [ShopController::class, 'index']);
Route::get('/detail/{shop_id}', [ShopController::class, 'detail']);
Route::get('/shop/search', [ShopController::class, 'search']);

Route::get('/shop/like', [ShopLikeController::class, 'like']);
Route::get('/shop/unlike', [ShopLikeController::class, 'unlike']);

Route::get('/done', [ReservationController::class, 'done']);
Route::post('/reservation', [ReservationController::class, 'store']);
Route::get('/reservation/{reservation_id}', [ReservationController::class, 'destroy']);