<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serviceType extends Model
{
    use HasFactory;

    protected $fillable = [
        'nameServiceType',
    ];

    public function services()
    {
        return $this->hasMany(services::class);
    }
}
