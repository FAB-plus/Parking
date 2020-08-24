<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordersupplies extends Model
{
            public function supplies()
            {
                return $this->belongsTo('App\Supply', 'supplierId');
            }
           public function product()
            {
                return $this->belongsTo('App\Product', 'productId');
            }

}
