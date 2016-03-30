<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $primaryKey = 'unit_id';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public $fillable = [
        'name', 'user_id',
    ];
    public function products() {
        return $this->hasMany('App\Product');
    }
    public static function boot() {
        parent::boot();
        
        static::deleted(function($unit){
            $unit->products()->delete();
        });
    }
}
