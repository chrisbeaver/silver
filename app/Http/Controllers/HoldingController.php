<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HoldingController extends Controller
{
    public function create()
    {
        return view('holdings.new');
    }

    public function store(Request $request)
    {

    }
}
