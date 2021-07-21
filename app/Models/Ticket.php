<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\TypeTicket;
use App\Models\Passengers;

class Ticket extends Model
{
    protected $table = 'ticket';
    
    protected $fillable = [
        'event_date', 'event_id',
        'barcode', 'type_id','event_id'
    ];
    // protected $with = ['TypeTicket','Passengers'];

    public function TypeTicket()
    {
        return $this->hasOne(TypeTicket::class , 'id', 'type_id');
    }
    public function Passengers()
    {
        return $this->hasMany(Passengers::class, 'event_id','id');
    }
}
