<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class RequestTicket extends FormRequest
{
    public function authorize()
    {
        return true;
    }
    public function rules()
    {
        return [
                'event_id'=> 'required|integer',
                'event_date'=> 'required|date',
                'ticket_adult_price'=> 'required|integer',
                'ticket_adult_quantity'=> 'required|integer',
                'ticket_kid_price'=> 'required|integer',
                'ticket_kid_quantity'=> 'required|integer',
                'equal_price'=> 'required|integer',
                'type_ticket'=> 'nullable|integer'
        ];
    }
}