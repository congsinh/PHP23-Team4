<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $casts = [
        'configuration' => 'array'
    ];
    const IS_AVAILABLE = 1;
    const IS_OUT_STOCK = 2;
    const IS_GOING_OUT_STOCK = 3;

    protected $fillable = ['name','slug','configuration','description','quantity_store','price','rating','sales','category_id','manufacture_id'];

    public function category (){
        return $this->belongsTo('App\Models\Category');
    }

    public function manufacturer (){
        return $this->belongsTo('App\Models\Manufacturer','manufacture_id','id');
    }

    public function imageDetail(){
        return $this->hasMany('App\Models\ImageDetail','product_id','id');
    }

    public function orders(){
        return $this->belongsToMany('App\Models\Order','order_details','product_id','order_id')->withPivot('quantity')->withTimestamps();
    }

    public static function getListStatuses(){
        return [
            self::IS_AVAILABLE => trans('labels.products.'.self::IS_AVAILABLE),
            self::IS_OUT_STOCK => trans('labels.products.'.self::IS_OUT_STOCK),
            self::IS_GOING_OUT_STOCK => trans('labels.products.'.self::IS_GOING_OUT_STOCK),
        ];
    }
    public static function getListStatusWithBootstrapLabels(){
        return [
            self::IS_AVAILABLE => sprintf('<span class="label label-success label-draft">%s</span>', trans('labels.products.' .self::IS_AVAILABLE)),
            self::IS_OUT_STOCK => sprintf('<span class="label label-danger label-draft">%s</span>', trans('labels.products.' .self::IS_OUT_STOCK)),
            self::IS_GOING_OUT_STOCK => sprintf('<span class="label label-warning label-draft">%s</span>', trans('labels.products.' .self::IS_GOING_OUT_STOCK)),
        ];
    }
}
