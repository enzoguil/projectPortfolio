<?php
// filepath: app/Http/Controllers/HomeController.php
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Project;

class HomeController extends Controller
{
    public function index()
    {
        // Appeler l'API pour récupérer les projets
        $projects = Project::orderBy('created_at', 'desc')->take(3)->get();

        return view('front.home', compact('projects'));
    }

    public function projects()
    {
        // Appeler l'API pour récupérer tous les projets
        $projects = Project::orderBy('created_at', 'desc')->get();

        return view('front.projects', compact('projects'));
    }

    public function show($id)
    {
        // Appeler l'API pour récupérer un projet spécifique
        $project = Project::findOrFail($id);

        return view('front.project', compact('project'));
    }

    public function skills()
    {
        // Appeler l'API pour récupérer les compétences
        $skills = Http::get('https://api.example.com/skills')->json();

        return view('front.skills', compact('skills'));
    }
}
