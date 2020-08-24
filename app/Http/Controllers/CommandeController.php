<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Commande;
use App\Vehicule;
use App\Client;


class CommandeController extends Controller
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
        $arr['commandes'] = Commande::all();
        return view('admin.commandes.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['commandes'] = Commande::all();
        $arr['clients'] = Client::all();
        $arr['vehicules'] = Vehicule::all();

        return view('admin.commandes.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Commande $commande)
    {
        
    $commande->Date_Cmde = $request->Date_Cmde;
    $commande->TravailAeffectuer = $request->TravailAeffectuer;
    $commande->Observations = $request->Observations;
    $commande->clientId = $request->clientId;
    $commande->Vehicule_id = $request->Vehicule_id;
    $commande->save();
    return redirect()->route('admin.commandes.index');
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
    public function edit(Commande  $commande)
    {
            $arr['commandes'] = $commande;
            $arr['clients'] = Client::all();
            $arr['vehicules'] = Vehicule::all();
            return view('admin.commandes.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Commande $commande)
    {
      
     $commande->Date_Cmde = $request->Date_Cmde;
     $commande->TravailAeffectuer = $request->TravailAeffectuer;
     $commande->Observations = $request->Observations;
     $commande->clientId = $request->clientId;
     $commande->Vehicule_id = $request->Vehicule_id;
     $commande->save();
    return redirect()->route('admin.commandes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           Commande::destroy($id);
           return redirect()->route('admin.commandes.index');
    }
}
