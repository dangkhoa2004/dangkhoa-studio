<?php
namespace App\Http\Controllers;

use App\Services\Portfolio\PortfolioService;

class PortfolioController extends Controller
{
    public function __construct(
        protected PortfolioService $portfolioService
    ) {}

    public function index() // Bỏ kiểu trả về JsonResponse
    {
        // Lấy data từ Service
        $data = $this->portfolioService->getFullCV();

        // Trả về View 'home' và truyền data sang
        return view('home', $data);
    }
}