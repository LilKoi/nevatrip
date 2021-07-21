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
                'type_id'=> 'nullable|integer'
        ];
    }
}