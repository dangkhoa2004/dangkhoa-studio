<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Project;
use App\Models\Skill;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // ====================================================
        // 1. DATA SẢN PHẨM (SHOP) - Giả lập dựa trên kỹ năng
        // ====================================================

        // Sản phẩm 1
        Product::create([
            'name' => 'Source Code Web Bán Hàng Laravel & Vue.js',
            'price' => 5000000,
            'stock' => 5
        ]);

        // Sản phẩm 2
        Product::create([
            'name' => 'Template Landing Page React & Tailwind',
            'price' => 1500000,
            'stock' => 10
        ]);

        // Sản phẩm 3 (Liên quan đến kinh nghiệm làm Game)
        Product::create([
            'name' => 'Module Login & Payment cho Game Server',
            'price' => 3500000,
            'stock' => 3
        ]);

        // Sản phẩm 4
        Product::create([
            'name' => 'Ebook: Tối ưu hóa Database MySQL & NoSQL',
            'price' => 200000,
            'stock' => 100
        ]);

        // ====================================================
        // 2. DATA KINH NGHIỆM & DỰ ÁN (Lấy từ phần KINH NGHIỆM trong CV)
        // ====================================================

        // Dự án 1: Ouransoft
        Project::create([
            'title' => 'Fullstack (Fresher) | Ouransoft Hải Phòng',
            'description' => 'Phát triển hệ thống Backend API hiệu năng cao sử dụng Laravel (PHP). Thiết kế và tối ưu hóa cơ sở dữ liệu NoSQL.',
            'tech_stack' => 'PHP (Laravel), Vue.js, TypeScript, NoSQL',
            'demo_link' => '#' // Chưa có link thì để #
        ]);

        // Dự án 2: Game Indie
        Project::create([
            'title' => 'Xây dựng Game Indie với Unity',
            'description' => 'Vai trò: Game Developer. Thiết kế môi trường, xử lý vật lý va chạm và hệ thống chuyển động cho nhân vật trong game.',
            'tech_stack' => 'Unity Engine, C#',
            'demo_link' => 'https://itch.io' // Ví dụ link demo
        ]);

        // Dự án 3: Game Server
        Project::create([
            'title' => 'Phát triển & Vận hành Game Server',
            'description' => 'Dự án: Minecraft, Ngọc Rồng, Làng Lá. Vai trò: Backend Developer / Logic Programmer.',
            'tech_stack' => 'Java Core, C++, MySQL',
            'demo_link' => '#'
        ]);

        // Dự án 4: Chính trang web này
        Project::create([
            'title' => 'Đăng Khoa Studio (Personal Brand)',
            'description' => 'Hệ thống Hybrid: Website bán hàng kết hợp Portfolio cá nhân (CV Online).',
            'tech_stack' => 'PHP, Laravel 11, TailwindCSS, MySQL',
            'demo_link' => 'https://dangkhoa.studio'
        ]);

        // ====================================================
        // 3. DATA KỸ NĂNG (Chia thành 6 phần cho đẹp Layout)
        // ====================================================

        // 1. Frontend Frameworks
        Skill::create([
            'name' => 'Frontend (Vue.js, React, Tailwind)',
            'proficiency' => 90
        ]);

        // 2. Backend Development
        Skill::create([
            'name' => 'Backend (PHP/Laravel, Node.js)',
            'proficiency' => 85
        ]);

        // 3. Core Languages (Tách riêng ngôn ngữ thuần)
        Skill::create([
            'name' => 'Core Lang (Java, C++, Python)',
            'proficiency' => 80
        ]);

        // 4. Database Management (Tách riêng CSDL)
        Skill::create([
            'name' => 'Database (MySQL, NoSQL, MongoDB)',
            'proficiency' => 80
        ]);

        // 5. Tools & DevOps
        Skill::create([
            'name' => 'DevOps & Tools (Git, Docker, Postman)',
            'proficiency' => 75
        ]);

        // 6. Creative & Soft Skills
        Skill::create([
            'name' => 'Creative (Video Editing, Photo, UI/UX)',
            'proficiency' => 85
        ]);
    }
}