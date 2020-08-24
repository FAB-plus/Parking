<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrdersDetails extends Model
{
            public function orderdet()
            {
                return $this->belongsTo('App\Product', 'productId');
            }

            public function orders()
            {
                return $this->belongsTo('App\Order', 'orderId');
            }
}
