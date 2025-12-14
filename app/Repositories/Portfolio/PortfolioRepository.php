<?php
namespace App\Repositories\Portfolio;

use App\Models\Project;
use App\Models\Skill;

class PortfolioRepository
{
    public function getProjects()
    {
        // Nếu thiếu dòng "use" ở trên, PHP sẽ báo lỗi "Class not found" ở đây
        return Project::orderBy('created_at', 'desc')->get();
    }

    public function getSkills()
    {
        return Skill::orderBy('proficiency', 'desc')->get();
    }
}