<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function supplier()
    {
        return $this->belongsTo('App\Supplier', 'supplierId');
    }
    
    public function category()
    {
        return $this->belongsTo('App\Category', 'categoryId');
    }

    public function orderdet()
    {
        return $this->hasMany('App\OrdersDetails');
    }

     public function ordersuppl()
    {
        return $this->hasMany('App\Ordersupplies');
    }

         public function supply()
    {
        return $this->belongsTo('App\Supply');
    }
}
