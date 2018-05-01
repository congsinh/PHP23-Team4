<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ImageDetail extends Model
{
    protected $table = 'image_details';
    protected $fillable = [
        'image_detail',
        'product_id',
    ];

    public function product(){
        return $this->belongsTo('App\Models\Product');
    }
}
