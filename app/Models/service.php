<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'application_date', 'scheduling_date', 'pre_charge', 'mechanic_id', 'client_id',
        'type_service_id'
    ];

    public function mechanic()
    {
        return $this->belongsTo(User::class, 'mechanic_id');
    }

    public function client()
    {
        return $this->belongsTo(User::class, 'client_id');
    }

    public function type_service()
    {
        return $this->belongsTo(TypeService::class);
    }
}
