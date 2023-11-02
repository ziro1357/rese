<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\LikeController;

Route::get('/', [ShopController::class, 'index']);
Route::get('/detail/:shop_{id}', [ShopController::class, 'detail']);

Route::get('/like/:shop_{id}', [LikeController::class, 'like'])->name('reply.like');
Route::get('/unlike/:shop_{id}', [LikeController::class, 'unlike'])->name('reply.unlike');
