<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Quote;
use Illuminate\Http\Request;

/**
 * @OA\Tag(
 *     name="Quotes",
 *     description="Endpoints pour gérer les demandes de devis"
 * )
 */
/**
 * @OA\Schema(
 *     schema="Quote",
 *     type="object",
 *     title="Quote",
 *     description="Représentation d'une demande de devis",
 *     @OA\Property(property="id", type="integer", example=1),
 *     @OA\Property(property="name", type="string", example="John Doe"),
 *     @OA\Property(property="email", type="string", example="john.doe@example.com"),
 *     @OA\Property(property="message", type="string", example="Je souhaite un devis pour un site web."),
 *     @OA\Property(property="created_at", type="string", format="date-time", example="2023-05-01T12:34:56Z"),
 *     @OA\Property(property="updated_at", type="string", format="date-time", example="2023-05-01T12:34:56Z")
 * )
 */
class QuoteController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/quotes",
     *     tags={"Quotes"},
     *     summary="Créer une demande de devis",
     *     @OA\RequestBody(
     *         required=true,
     *         @OA\JsonContent(
     *             required={"name", "email", "message"},
     *             @OA\Property(property="name", type="string", example="John Doe"),
     *             @OA\Property(property="email", type="string", example="john.doe@example.com"),
     *             @OA\Property(property="message", type="string", example="Je souhaite un devis pour un site web.")
     *         )
     *     ),
     *     @OA\Response(
     *         response=201,
     *         description="Demande de devis créée avec succès",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Demande de devis créée avec succès."),
     *             @OA\Property(property="quote", ref="#/components/schemas/Quote")
     *         )
     *     ),
     *     @OA\Response(
     *         response=422,
     *         description="Erreur de validation",
     *         @OA\JsonContent(
     *             @OA\Property(property="message", type="string", example="Les données fournies ne sont pas valides.")
     *         )
     *     )
     * )
     */
    public function store(Request $request)
    {
        // Valider les données
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string',
        ]);

        // Créer une demande de devis
        $quote = Quote::create($validated);

        return response()->json(['message' => 'Demande de devis créée avec succès.', 'quote' => $quote], 201);
    }
}
