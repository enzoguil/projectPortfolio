<?php
// filepath: app/Models/Project.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     schema="Project",
 *     type="object",
 *     title="Project",
 *     properties={
 *         @OA\Property(property="id", type="integer", example=1),
 *         @OA\Property(property="title", type="string", example="Portfolio"),
 *         @OA\Property(property="description", type="string", example="Un projet de portfolio pour présenter mes compétences."),
 *         @OA\Property(property="image", type="string", example="images/portfolio.png"),
 *         @OA\Property(property="created_at", type="string", format="date-time"),
 *         @OA\Property(property="updated_at", type="string", format="date-time")
 *     }
 * )
 */
class Project extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'description', 'image', 'name', 'tasks', 'steps', 'features', 'user_id'];
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
