<?php

// filepath: app/Http/Controllers/API/ProjectController.php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Project;


/**
 * @OA\Tag(
 *     name="Projects",
 *     description="Endpoints pour gérer les projets"
 * )
 */
class ProjectController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/projects",
     *     tags={"Projects"},
     *     summary="Lister tous les projets",
     *     @OA\Response(
     *         response=200,
     *         description="Liste des projets",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Project")
     *         )
     *     )
     * )
     */
    public function index()
    {
        // Lister tous les projets
        return response()->json(Project::all());
    }


    public function showAllProjects()
    {
        // Récupérer tous les projets
        $projects = Project::orderBy('created_at', 'desc')->get();
        return view('front.projects', compact('projects'));
    }

    /**
     * @OA\Get(
     *     path="/api/projects/{id}",
     *     tags={"Projects"},
     *     summary="Afficher les détails d'un projet",
     *     @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true,
     *         description="ID du projet",
     *         @OA\Schema(type="integer")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="Détails du projet",
     *         @OA\JsonContent(ref="#/components/schemas/Project")
     *     ),
     *     @OA\Response(
     *         response=404,
     *         description="Projet non trouvé"
     *     )
     * )
     */
    public function show($id)
    {
        // Récupérer le projet par son ID
        $project = Project::findOrFail($id);

        // Retourner la vue avec les détails du projet
        return view('front.project', compact('project'));
    }
}
