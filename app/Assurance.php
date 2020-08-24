<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Assurance extends Model
{
     
    public function assurance(){
         return $this->belongsTo('App\Vehicule', 'Vehicule_id');
    }
   
}
