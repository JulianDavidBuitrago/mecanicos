<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class serviceScheduling extends Model
{
    use HasFactory;

    protected $fillable = [
        'createdDateServiceScheduling',
        'estimatedServiceScheduling',
        'deleteCodeServiceScheduling',
        'mechanicCommentServiceScheduling',
        'clientCommentServiceScheduling',
        'mechanicReputationServiceScheduling',
        'clientReputationServiceScheduling',
        'idClient',
        'idServicesList',
        'idStatusServiceScheduling',
    ];

    public function client()
    {
        return $this->belongsTo(client::class);
    }

    public function servicesList()
    {
        return $this->belongsTo(servicesList::class);
    }

    public function statusServiceScheduling()
    {
        return $this->belongsTo(statusServiceScheduling::class);
    }

    public function payment()
    {
        return $this->hasMany(payment::class);
    }
}
