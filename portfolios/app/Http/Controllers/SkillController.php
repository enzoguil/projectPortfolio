<?php

namespace App\Http\Controllers;

use App\Models\Skill;

class SkillController extends Controller
{
    public function index()
    {
        // Récupérer toutes les compétences
        $skills = Skill::all();

        return view('front.skills', compact('skills'));
    }

    public function show($id)
    {
        // Récupérer une compétence spécifique et ses projets associés
        $skill = Skill::with('projects')->findOrFail($id);

        return view('front.skill', compact('skill'));
    }
}
