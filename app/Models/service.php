<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    use HasFactory;

    protected $fillable = [
        'maneService',
        'descriptionService',
        'idServiceType',
    ];

    public function serviceType()
    {
        return $this->belongsTo(serviceType::class);
    }

    public function servicesList()
    {
        return $this->belongsToMany(mechanic::class);
    }
}
