<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Bảng Dự án
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');          // Tên dự án
            $table->text('description');      // Mô tả
            $table->string('tech_stack');     // Công nghệ (VD: PHP, Laravel, React)
            $table->string('image_url')->nullable(); // Ảnh dự án
            $table->string('demo_link')->nullable(); // Link xem thử
            $table->timestamps();
        });

        // Bảng Kỹ năng
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');           // Tên skill (PHP, SQL)
            $table->integer('proficiency');   // Độ thành thạo (0-100)
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_tables');
    }
};
