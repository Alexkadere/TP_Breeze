<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    protected $fillable = [
        'ville',
        'date_naissance',
        'genre',
        'user_id',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
