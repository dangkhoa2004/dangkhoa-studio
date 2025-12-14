<?php
namespace App\Services\Portfolio;

use App\Repositories\Portfolio\PortfolioRepository;
use App\DTO\Portfolio\ProjectDTO;

class PortfolioService
{
    public function __construct(
        protected PortfolioRepository $portfolioRepo
    ) {}

    // Hàm lấy toàn bộ thông tin cho trang CV
    public function getFullCV()
    {
        $projects = $this->portfolioRepo->getProjects();
        $skills = $this->portfolioRepo->getSkills();

        // Map Projects sang DTO
        $projectDTOs = $projects->map(fn($p) => ProjectDTO::fromModel($p));

        return [
            'author' => 'Dang Khoa', // Có thể lấy từ bảng User hoặc Config
            'title' => 'Fullstack Web Developer',
            'skills' => $skills,
            'projects' => $projectDTOs
        ];
    }
}