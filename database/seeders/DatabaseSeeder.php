<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product; // <--- Đừng quên dòng này
use App\Models\Project; // <--- Đừng quên dòng này
use App\Models\Skill;   // <--- Đừng quên dòng này

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Tạo dữ liệu Sản phẩm (Product)
        Product::create([
            'name' => 'Website Bán Hàng Laravel',
            'price' => 5000000,
            'stock' => 1
        ]);
        
        Product::create([
            'name' => 'Source Code Landing Page',
            'price' => 1500000,
            'stock' => 10
        ]);

        // 2. Tạo dữ liệu Dự án (Project) cho CV
        Project::create([
            'title' => 'DangKhoa Studio',
            'description' => 'Hệ thống Hybrid: E-commerce kết hợp Portfolio.',
            'tech_stack' => 'PHP, Laravel, TailwindCSS',
            'demo_link' => 'https://dangkhoa.studio'
        ]);

        // 3. Tạo dữ liệu Kỹ năng (Skill) cho CV
        Skill::create(['name' => 'Laravel', 'proficiency' => 90]);
        Skill::create(['name' => 'MySQL', 'proficiency' => 85]);
    }
}