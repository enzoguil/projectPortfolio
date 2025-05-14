<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Service;

/**
 * @OA\Tag(
 *     name="Services",
 *     description="Endpoints pour gérer les services"
 * )
 */
class ServiceController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/services",
     *     tags={"Services"},
     *     summary="Lister tous les services",
     *     @OA\Response(
     *         response=200,
     *         description="Liste des services",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Service")
     *         )
     *     )
     * )
     */
    public function index()
    {
        // Lister tous les services
        return response()->json(Service::all());
    }
}
