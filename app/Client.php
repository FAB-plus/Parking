<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    
        public function client()
           {
         return $this->belongsTo('App\Vehicule', 'Vehicule_id');
           }

        public function orders()
           {
         return $this->hasMany('App\Order');
          }
        public function cmde()
         {
         return $this->hasOne('App\Commande');
         }
        public function ordre()
          {
          return $this->belongsTo('App\Ordrerep', 'clientId');
          }

   
}
