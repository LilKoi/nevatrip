<?php

namespace App\Http\Resourse;

use Illuminate\Http\Resources\Json\JsonResource;

class Ticket extends JsonResource
{
    public function toArray($request)
    {
        // dd($this);
        return [
            'id'=> $this->id, 
            'event_id'=> $this->event_id,
            'event_date'=> $this->event_date,
            'ticket_adult_price'=> $this->ticket_adult_price,
            'ticket_adult_quantity'=> $this->ticket_adult_quantity,
            'ticket_kid_price'=> $this->ticket_kid_price,
            'ticket_kid_quantity'=> $this->ticket_kid_quantity,
            'barcode'=> $this->barcode,
            'equal_price'=> $this->equal_price,
            'created '=> $this->created_at,
            'type_id' => $this->type_id
        ];
    }
}