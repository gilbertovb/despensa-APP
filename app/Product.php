<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'name', 'unit_id', 'user_id',
    ];
    
    public function unit() {
        return $this->belongsTo('App\Unit');
    }

    public function stock() {
        return $this->hasOne('App\Stock');
    }

}
