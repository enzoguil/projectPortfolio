<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitorStatistic extends Model
{
    use HasFactory;

    protected $fillable = ['ip_address', 'url', 'visited_at', 'user_id'];
}
