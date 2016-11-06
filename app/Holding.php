<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Holding extends Model
{
    protected $fillable = ['user_id', 'name', 'weight', 'weight_unit', 'finess', 'quantity',
                           'purchase_price', 'purchase_date', 'purchase_currency', 'year'];
                           
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
