<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holding;

class ImageController extends Controller
{
    public function create()
    {
        $holding = Holding::find(session()->get('active_holding'));
        return view('images.new', compact('holding'));
    }

    public function store(Request $request)
    {
        return $request;
    }
}
