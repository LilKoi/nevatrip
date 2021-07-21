<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TypeTicket extends Model
{
    protected $table = 'type_ticket';
    protected $fillable = [
        'name',
        'ticket_adult_price', 'ticket_adult_quantity', 
        'ticket_kid_price', 'ticket_kid_quantity',
    ];
}
