<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class servicesList extends Model
{
    use HasFactory;

    protected $fillable = [
        'costServicesList',
        'statusServicesList',
        'idMechanic',
        'idService',
    ];

    public function schedulingLists()
    {
        return $this->hasMany(serviceScheduling::class);
    }
}
