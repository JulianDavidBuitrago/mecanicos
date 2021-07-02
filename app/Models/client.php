<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;

    protected $fillable = [
        'emailClient',
        'passwordClient',
        'nameClient',
        'surnamedClient',
        'identificationClient',
        'carClient',
        'phoneClient',
        'profilePictureClient',
        'genderClient',
        'latitudeClient',
        'longitudeClient',
        'idCity',
    ];

    public function city()
    {
        return $this->belongsTo(city::class);
    }

    public function serviceSchedulings()
    {
        return $this->hasMany(serviceScheduling::class);
    }
}
