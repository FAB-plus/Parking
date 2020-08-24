<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Gestion;
use App\Vehicule;
use App\Assurance;
use App\Visite;

class GestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
       $arr['gestions'] = Gestion::all();
       $arr['vehicules'] = Vehicule::all();
       $arr['assurances'] = Assurance::all();
       $arr['visites'] = Visite::all();
       return view('controler.gestions.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $arr['gestions'] = Gestion::all();
       $arr['vehicules'] = vehicule::all();
       $arr['assurances'] = Assurance::all();
       $arr['visites'] = Visite::all();
       return view('controler.gestions.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Gestion $gestion)
    {
        $gestion->vehicules_id = $request->vehicules_id;
        $gestion->assurances_id = $request->assurances_id;
        $gestion->visites_id = $request->visites_id;
        $gestion->save();
        return redirect()-> route('controler.gestions.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Gestion $gestion)
    {
        $arr['gestions'] = Gestion::all();
        $arr['vehicules'] = Vehicule::all();
        $arr['assurances'] = Assurance::all();
        $arr['visites'] = Visite::all();
        return view('controler.visites.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Gestion $gestion)
    {
        $gestion->vehicules_id = $request->vehicules_id;
        $gestion->assurances_id = $request->assurances_id;
        $gestion->visites_id = $request->visites_id;
        $gestion->save();
        return redirect()-> route('controler.gestions.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Gestion::destroy($id);
        return redirect()-> route('controler.gestions.index');
    }
}
