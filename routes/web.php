<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ShopLikeController;
use App\Http\Controllers\ReservationController;

Route::group(['middleware' => 'auth'], function(){
    Route::get('/mypage/{user_id}', [UserController::class, 'index'])->name('mypage');

    Route::get('/shop/like', [ShopLikeController::class, 'like']);
    Route::get('/shop/unlike', [ShopLikeController::class, 'unlike']);

    Route::get('/done', [ReservationController::class, 'done']);
    Route::post('/reservation', [ReservationController::class, 'store']);
    Route::get('/reservation/{reservation_id}', [ReservationController::class, 'destroy']);
});

Route::get('/register', [AuthenticationController::class, 'showRegister']);
Route::post('/register', [AuthenticationController::class, 'register']);
Route::get('/thanks', [AuthenticationController::class, 'thanks']);
Route::get('/login', [AuthenticationController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthenticationController::class, 'login']);
Route::get('/logout', [AuthenticationController::class, 'logout']);

Route::get('/', [ShopController::class, 'index']);
Route::get('/detail/{shop_id}', [ShopController::class, 'detail'])->name('shop.detail');
Route::get('/shop/search', [ShopController::class, 'search']);