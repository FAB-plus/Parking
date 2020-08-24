<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supply extends Model
{
       public function sup(){
        return $this->hasMany('App\Ordersupplies');
    }
    public function prod(){
        return $this->hasMany('App\Product');
    }

}
