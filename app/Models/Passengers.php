<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TypeTicket;

class Passengers extends Model
{
    protected $table = 'passengers';
    
    protected $fillable = [
        'id', 'event_id',
        'type',
        'barcode', 'user_id'
    ];

    
}
