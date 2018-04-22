<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'configuration' => 'array'
    ];
    protected $fillable = ['name','slug','configuration','description','quantity_store','price','rating','sales','image','category_id','manufacture_id'];

    public function category (){
        return $this->belongsTo('App\Category');
    }
    public function manufacturer (){
        return $this->belongsTo('App\Manufacturer');
    }
    public function imageDetail(){
        return $this->hasMany('App\ImageDetail');
    }
}
