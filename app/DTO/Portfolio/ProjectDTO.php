<?php
namespace App\DTO\Portfolio;

class ProjectDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $title,
        public readonly string $description,
        public readonly array $technologies, // Trả về dạng mảng
        public readonly ?string $link
    ) {}

    public static function fromModel($model): self
    {
        return new self(
            id: $model->id,
            title: $model->title,
            description: $model->description,
            // Tách chuỗi "PHP, Laravel" thành mảng
            technologies: explode(',', $model->tech_stack), 
            link: $model->demo_link
        );
    }
}