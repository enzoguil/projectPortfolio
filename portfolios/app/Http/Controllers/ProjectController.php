<?php
namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    // Afficher la liste des projets
    public function index()
    {
        $projects = Project::all();
        return view('backoffice.projects', compact('projects'));
    }

    // Ajouter un nouveau projet
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
        ]);

        Project::create($request->all());

        return redirect()->route('projects.index')->with('success', 'Projet ajouté avec succès.');
    }

    // Afficher le formulaire de modification
    public function edit($id)
    {
        $project = Project::findOrFail($id);
        return view('backoffice.edit_project', compact('project'));
    }

    // Mettre à jour un projet
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
        ]);

        $project = Project::findOrFail($id);
        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Projet mis à jour avec succès.');
    }

    // Supprimer un projet
    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Projet supprimé avec succès.');
    }
}
