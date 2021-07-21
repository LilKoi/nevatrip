<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Passengers;
class PassengersController
{
    private $LENGTH_BARCODE = 9;
    protected $model;

    public function __construct(Passengers $passengers)
    {
        $this->model = $passengers;
    }

    public function show(int $id)
    {
        $ticket = $this->model->find($id);
        return $ticket;
    }

    public function store(Request $request)
    {
        $passenger = new Passengers();
        $passenger->fill($request->toArray());
        $passenger->barcode = $this->createBarcode();
        $passenger->save();
        return response()->json($passenger);
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
