<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class statusServiceScheduling extends Model
{
    use HasFactory;

    protected $fillable = [
        'statusServiceSchedulings',
        'descriptionServiceSchedulings',
    ];

    public function serviceScheduling()
    {
        return $this->hasMany(serviceScheduling::class);
    }
}
