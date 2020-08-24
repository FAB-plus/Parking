<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class ExpiredController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

    public function expired_date(){

        $current = new Carbon();
        echo $current;
    }
}
