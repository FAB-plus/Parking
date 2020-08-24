<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicule extends Model
{
    public function veh()
    {
        return $this->hasOne('App\Commande');
    }

    public function vehClient()
    {
        return $this->hasOne('App\Client');
    }

    public function vehAss()
    {
        return $this->hasOne('App\Assurance');
    }

    public function vehVisite()
    {
        return $this->hasOne('App\Visite');
    }

     public function vehGestion()
    {
        return $this->hasOne('App\Gestion');
    }
    public function vehOrdres()
    {
        return $this->belongsTo('App\Ordrerep', 'vehicule_id');
    }

}
