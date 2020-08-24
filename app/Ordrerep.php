<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ordrerep extends Model
{
   public function cmde()
{
    return $this->hasOne('App\Vehicule', 'id');
}
      public function client()
{
    return $this->hasOne('App\Client', 'id');
}

}
