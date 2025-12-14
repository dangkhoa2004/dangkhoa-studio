<?php
namespace App\DTO;

class ProductDTO
{
    // PHP 8.1+: readonly properties
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $formattedPrice, // Giá đã format VND
        public readonly int $stock
    ) {}

    // Hàm chuyển từ Model sang DTO
    public static function fromModel($model): self
    {
        return new self(
            id: $model->id,
            name: $model->name,
            formattedPrice: number_format($model->price, 0, ',', '.') . ' VNĐ',
            stock: $model->stock
        );
    }
}