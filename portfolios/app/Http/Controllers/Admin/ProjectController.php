<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function index(Request $request)
    {
        $query = auth()->user()->projects();

        if ($request->filled('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('title', 'like', "%{$search}%")
                ->orWhere('description', 'like', "%{$search}%");
            });
        }

        $projects = $query->paginate(10);

        return view('backoffice.projects.index', compact('projects'));
    }

    public function create()
    {
        $user = auth()->user();
        return view('backoffice.projects.create', compact('user'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|exists:users,id',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|string',
            'name' => 'required|string|max:255',
            'tasks' => 'required|string',
            'steps' => 'required|string',
            'features' => 'required|string',
        ]);

        Project::create($request->all());
        return redirect()->route('projects.index')->with('success', 'Projet ajouté avec succès.');
    }

    public function edit(string $id)
    {
        $project = Project::findOrFail($id);
        return view('backoffice.projects.edit', compact('project'));
    }

    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'tasks' => 'required|string',
            'steps' => 'required|string',
            'features' => 'required|string',
            'image' => 'nullable|string',
        ]);

        $project = Project::findOrFail($id);
        $project->update($request->all());

        return redirect()->route('projects.index')->with('success', 'Projet mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $project = Project::findOrFail($id);
        $project->delete();

        return redirect()->route('projects.index')->with('success', 'Projet supprimé avec succès.');
    }
}
