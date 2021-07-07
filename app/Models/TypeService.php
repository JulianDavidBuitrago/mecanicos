<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeService extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'description', 'cost', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function service()
    {
        return $this->hasOne(Service::class);
    }
}
