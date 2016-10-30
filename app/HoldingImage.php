<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HoldingImage extends Model
{
    public function holding()
    {
        return $this->belongsTo('App\Holding');
    }
}
