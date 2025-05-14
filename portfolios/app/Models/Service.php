<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
/**
 * @OA\Schema(
 *     schema="Service",
 *     type="object",
 *     title="Service",
 *     properties={
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="name", type="string", example="Développement Web"),
 *         @OA\Property(property="description", type="string", example="Création de sites web modernes et responsives."),
 *         @OA\Property(property="created_at", type="string", format="date-time"),
 *         @OA\Property(property="updated_at", type="string", format="date-time")
 *     }
 * )
 */
class Service extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
