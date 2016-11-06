<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\HoldingRequest;

use App\Holding;
use Carbon\Carbon;

class HoldingController extends Controller
{
    public function index()
    {
        return view('holdings.index');
    }

    public function create()
    {
        return view('holdings.new');
    }

    public function store(HoldingRequest $request)
    {
        $date = Carbon::createFromFormat('m-d-Y', $request->purchase_date)->format('Y-m-d');
        Holding::create(['name' => $request->name, 'weight' => $request->weight, 
            'weight_unit' => $request->weight_unit, 'quantity' => $request->quantity, 
            'finess' => $request->finess, 'purchase_price' => $request->purchase_price * 100, 
            'purchase_date' => $date, 'user_id' => $request->user_id,
            'purchase_currency' => $request->purchase_currency]);

        return redirect()->action('ImageController@create'); 

    }
}
