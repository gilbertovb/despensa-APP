<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';
    protected $primaryKey = 'stock_id';

    protected $fillable = [
        'product_id', 'user_id', 'min', 'current',
    ];
    public function product() {
        return $this->belongsTo('App\Product');
    }

}
