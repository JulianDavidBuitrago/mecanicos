<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;

    protected $fillable = [
        'confirmationCodePayment',
        'descriptionPayment',
        'responsePayment',
        'idServicesScheduing',
    ];

    public function serviceScheduling()
    {
        return $this->belongsTo(serviceScheduling::class);
    }
}
