<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ticket;
use App\Http\Resourse\Ticket as Resourse;
use App\Http\Requests\RequestTicket;
use App\Models\Passengers;
use App\Models\TypeTicket;
class TicketController
{
    private $LENGTH_BARCODE = 9;
    protected $model;

    public function __construct(Ticket $ticket)
    {
        $this->model = $ticket;
    }

    public function show(int $id)
    {
        $ticket = $this->model->find($id);
        // dd();
        $ticket->setAttribute('ticket_adult_quantity',$ticket->Passengers->where('type',1)->count());
        $ticket->setAttribute('ticket_kid_quantity',$ticket->Passengers->where('type',2)->count());
        $sum = $ticket->ticket_adult_quantity * $ticket->TypeTicket->ticket_adult_price + $ticket->ticket_kid_quantity * $ticket->TypeTicket->ticket_kid_price;
        $ticket->setAttribute('equal_price', $sum);
        return $ticket;
    }

    public function store(RequestTicket $request)
    {
        $data = $request->validated();
        $ticket = new Ticket();
        $ticket->fill($data);
        $ticket->barcode = $this->createBarcode();
        $ticket->save();
        // return response()->json($ticket);
        return new Resourse($ticket);
    }

    private function createBarcode():int
    {
        $respone = '';
        while($respone != 'order successfully booked'){
            $result = '';
            for ($i = 0; $i < $this->LENGTH_BARCODE; $i++) {
                $result .= mt_rand(0, 9);
            }
            $findBarcode = $this->model->where('barcode', $result)->count();
            if($findBarcode > 0)
            {
                $respone = 'barcode already exists';
            }else{
                $respone = 'order successfully booked';
            }
        }
        
        return $result;
    }
}
