<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    
    // Khai báo các cột được phép điền dữ liệu
    protected $fillable = ['title', 'description', 'tech_stack', 'image_url', 'demo_link'];
}