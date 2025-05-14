<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    protected $fillable = ['key', 'value', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
