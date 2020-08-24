<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Visite extends Model
{
     public function visite(){
     return $this->belongsTo('App\Vehicule', 'Vehicule_id');
    }
}
