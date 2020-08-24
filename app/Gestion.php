<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gestion extends Model
{
    public function gestions(){
     return $this->belongsTo('App\Vehicule', 'Vehicule_id');
    }

    public function vehAss()
    {
        return $this->belongsTo('App\Assurance');
    }

    public function vehVisite()
    {
        return $this->belongsTo('App\Visite');
    }
}
