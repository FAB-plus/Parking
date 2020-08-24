<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Vehicule;

class VehiculeController extends Controller
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
        $arr['vehicules'] = Vehicule::all();
        return view('admin.vehicules.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['vehicules'] = Vehicule::all();
        return view('admin.vehicules.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Vehicule $vehicule)
    {
        $vehicule->Num_Veh = $request->Num_Veh;
        $vehicule->Marque_Veh = $request->Marque_Veh;
        $vehicule->Modele_Veh = $request->Modele_Veh;
        $vehicule->Annee_Veh  = $request->Annee_Veh;
        $vehicule->Couleur_Veh = $request->Couleur_Veh;
        $vehicule->save();
        return redirect()->route('admin.vehicules.index');
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
    public function edit(vehicule $vehicule)
    {
            $arr['vehicules'] = $vehicule;
            return view('admin.vehicules.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicule $vehicule)
    {
        $vehicule->Num_Veh = $request->Num_Veh;
        $vehicule->Marque_Veh = $request->Marque_Veh;
        $vehicule->Modele_Veh = $request->Modele_Veh;
        $vehicule->Annee_Veh  = $request->Annee_Veh;
        $vehicule->Couleur_Veh = $request->Couleur_Veh;
        $vehicule->save();
        return redirect()->route('admin.vehicules.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
            Vehicule::destroy($id);
            return redirect()->route('admin.vehicules.index');
    }
}
