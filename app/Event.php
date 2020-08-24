<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use softDeletes;

class Event extends Model
{
    

    protected $fillable = ['title', 'start', 'end', 'color', 'description'];
}
