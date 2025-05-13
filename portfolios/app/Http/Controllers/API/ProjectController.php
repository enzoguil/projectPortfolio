<?php
// filepath: app/Http/Controllers/API/ProjectController.php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index()
    {
        // Récupérer les 3 projets les plus récents
        return Project::orderBy('created_at', 'desc')->take(3)->get();
    }

    public function showAllProjects()
    {
        // Récupérer tous les projets
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('front.projects', compact('projects'));
    }

    public function show($id)
    {
        // Récupérer le projet par son ID
        $project = Project::findOrFail($id);

        // Retourner la vue avec les détails du projet
        return view('front.project', compact('project'));
    }
}
