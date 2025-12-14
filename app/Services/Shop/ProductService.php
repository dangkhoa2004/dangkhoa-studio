<?php
namespace App\Services\Shop;

use App\Repositories\ProductRepository;
use App\DTO\ProductDTO;

class ProductService
{
    public function __construct(
        protected ProductRepository $productRepo
    ) {}

    public function getAllProductsAsDTO()
    {
        $products = $this->productRepo->getAllProducts();

        // Map từng Product Model sang ProductDTO
        return $products->map(function ($product) {
            return ProductDTO::fromModel($product);
        });
    }
}