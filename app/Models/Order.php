<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = ['discount', 'status', 'name', 'phone', 'address', 'total_pay', 'note', 'user_id'];

    const IS_DRAFT = 1;
    const IS_PENDING = 2;
    const IS_SHIPPING = 3;
    const IS_PAID = 4;
    public function user(){
        return $this->belongsTo('App\User');
    }

    public function products(){
        return $this->belongsToMany('App\Models\Product','order_details','order_id','product_id')->withPivot('quantity')->withTimestamps();
    }

    public function sumQuantity(){
        return $this->hasMany('App\Models\OrderDetail','order_id','id')->sum('quantity');
    }
    public static function getListStatuses(){
        return [
            self::IS_DRAFT => trans('labels.orders.'.self::IS_DRAFT),
            self::IS_PENDING => trans('labels.orders.'.self::IS_PENDING),
            self::IS_SHIPPING => trans('labels.orders.'.self::IS_SHIPPING),
            self::IS_PAID => trans('labels.orders.'.self::IS_PAID),
        ];
    }
    public static function getListStatusWithBootstrapLabels(){
        return [
            self::IS_DRAFT => sprintf('<span class="label label-default label-draft">%s</span>', trans('labels.orders.' .self::IS_DRAFT)),
            self::IS_PENDING => sprintf('<span class="label label-warning label-draft">%s</span>', trans('labels.orders.' .self::IS_PENDING)),
            self::IS_SHIPPING => sprintf('<span class="label label-primary label-draft">%s</span>', trans('labels.orders.' .self::IS_SHIPPING)),
            self::IS_PAID => sprintf('<span class="label label-success label-draft">%s</span>', trans('labels.orders.' .self::IS_PAID)),
        ];
    }
}
