<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class city extends Model
{
    use HasFactory;

    protected $fillable = [
        'idDepartment','nameCity','codeCity',
    ];

    public function departments()
    {
        return $this->belongsTo(department::class);
    }

    public function mechanics()
    {
        return $this->hasMany(mechanic::class);
    }
}
