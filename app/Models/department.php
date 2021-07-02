<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class department extends Model
{
    use HasFactory;

    protected $fillable = [
        'idCountry','nameDepartment', 'codeDepartment',
    ];

    public function country()
    {
        return $this->belongsTo(country::class);
    }


    public function cities()
    {
        return $this->hasMany(city::class);
    }

}
