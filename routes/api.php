<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\PortfolioController;

// Đảm bảo dòng này có tồn tại
Route::get('/products', [ProductController::class, 'index']);
Route::get('/cv', [PortfolioController::class, 'index']);