<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Skill;

class SkillSeeder extends Seeder
{
    public function run()
    {
        Skill::create(['name' => 'Java', 'image' => 'images/Java_Logo.svg']);
        Skill::create(['name' => 'HTML', 'image' => 'images/HTML5_logo.svg']);
        Skill::create(['name' => 'CSS', 'image' => 'images/CSS3_logo.svg']);
        Skill::create(['name' => 'JavaScript', 'image' => 'images/JavaScript_logo.svg']);
        Skill::create(['name' => 'PHP', 'image' => 'images/PHP-logo.svg']);
        Skill::create(['name' => 'SQL', 'image' => 'images/SQL_logo.svg']);
        Skill::create(['name' => 'Python', 'image' => 'images/Python-logo.svg']);
    }
}
