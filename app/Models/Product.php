<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'configuration' => 'array'
    ];
    protected $fillable = ['name','slug','configuration','description','quantity_store','price','rating','sales','category_id','manufacture_id'];

    public function category (){
        return $this->belongsTo('App\Models\Category');
    }
    public function manufacturer (){
        return $this->belongsTo('App\Models\Manufacturer');
    }
    public function imageDetail(){
        return $this->hasMany('App\Models\ImageDetail','product_id','id');
    }
}
