<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Calification extends Model
{
    use HasFactory;

    protected $fillable = [
        'calification'
    ];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
