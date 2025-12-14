<?php
namespace App\Http\Controllers;

use App\Services\Shop\ProductService;

class ProductController extends Controller
{
    public function __construct(
        protected ProductService $productService
    ) {}

    public function index()
    {
        $products = $this->productService->getAllProductsAsDTO();
        return view('products', ['products' => $products]);
    }
}