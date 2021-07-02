<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mechanic extends Model
{
    use HasFactory;

    protected $fillable = [
        'emailMechanic',
        'passwordMechanic',
        'nameMechanic',
        'surnamedMechanic',
        'identificationMechanic',
        'phoneMechanic',
        'profilePictureMechanic',
        'genderMechanic',
        'latitudeMechanic',
        'longitudeMechanic',
        'idCity',
    ];

    public function city()
    {
        return $this->belongsTo(city::class);
    }

    public function servicesList()
    {
        return $this->belongsToMany(service::class);
    }
}
