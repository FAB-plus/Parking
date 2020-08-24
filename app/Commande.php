<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
      public function cmde()
{
    return $this->belongsTo('App\Vehicule', 'Vehicule_id');
}
      public function client()
{
    return $this->belongsTo('App\Client', 'clientId');
}

}
