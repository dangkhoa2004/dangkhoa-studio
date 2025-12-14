<?php
namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{
    public function getAllProducts()
    {
        // Chỉ việc gọi Eloquent của Laravel
        return Product::all();
    }
}