<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Holding;
use App\HoldingImage;

class ImageController extends Controller
{
    public function create()
    {
        $holding = Holding::find(session()->get('active_holding'));
        return view('images.new', compact('holding'));
    }

    public function store(Request $request)
    {
        // Store in storage/app/holding-images
        $path = $request->image->store('holding-images');
        
        HoldingImage::create(['holding_id' => $request->holding_id, 'path' => $path]);
    }
}
