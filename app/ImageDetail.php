<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ImageDetail extends Model
{
    protected $fillable = ['image_detail'];

    public function product(){
        return $this->belongsTo('App\Product');
    }
}
