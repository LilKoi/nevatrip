<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $table = 'ticket';
    protected $fillable = [
        'event_date',
        'event_id', 'ticket_adult_price', 'ticket_adult_quantity', 
        'ticket_kid_price', 'ticket_kid_quantity', 
        'barcode', 'equal_price','type_id'
    ];

}
