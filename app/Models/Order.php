<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['discount', 'status', 'name', 'phone', 'address', 'total_pay', 'note', 'user_id'];

    public function user(){
        return $this->belongsTo('App\Models\Users');
    }

    public function products(){
        return $this->belongsToMany('App\Models\Product','order_details','order_id','product_id')->withPivot('quantity')->withTimestamps();
    }
}
