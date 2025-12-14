<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ProductController;

// Trang chủ là trang CV
Route::get('/', [PortfolioController::class, 'index']);

// Trang danh sách sản phẩm
Route::get('/products', [ProductController::class, 'index']);