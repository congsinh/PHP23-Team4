<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','slug','parent_id'];

    public function products () {
        return $this->hasMany('App\Models\Product');
    }

    public function subcate () {
        return $this->hasMany('App\Models\Category','parent_id','id');
    }

}
