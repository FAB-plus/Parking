<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
          public function order()
            {
                return $this->belongsTo('App\Client', 'clientId');
            }

            public function orderdet(){
              return $this->hasMany('App\OrderDetails');
            }
}
