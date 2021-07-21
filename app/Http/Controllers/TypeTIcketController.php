<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TypeTicket;
class TypeTIcketController extends Controller
{
    protected $model;
    public function __construct(TypeTicket $typeTicket)
    {
        $this->model = $typeTicket;
    }

    public function store(Request $request)
    {
        $type = new TypeTicket();
        $type->fill($request->toArray());
        $type->save(); 
    }
}
