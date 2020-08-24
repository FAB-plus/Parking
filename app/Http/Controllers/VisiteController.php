<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Visite;
use App\Vehicule;

class VisiteController extends Controller
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
        $arr['visites'] = Visite::all();
       $arr['vehicules'] = Vehicule::all();
       return view('controler.visites.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $arr['visites'] = Visite::all();
       $arr['vehicules'] = vehicule::all();
       return view('controler.visites.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Visite $visite)
    {
        $visite->date_visite = $request->date_visite;
        $visite->Expiration_visite = $request->Expiration_visite;
        $visite->vehicules_id = $request->vehicules_id;
        $visite->save();
        return redirect()-> route('controler.visites.index');
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
    public function edit(Visite $visite)
    {
        $arr['visites'] = Visite::all();
        $arr['vehicules'] = Vehicule::all();
        return view('controler.visites.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Visite $visite)
    {
        $visite->date_visite = $request->date_visite;
        $visite->Expiration_visite = $request->Expiration_visite;
        $visite->vehicules_id = $request->vehicules_id;
        $visite->save();
        return redirect()-> route('controler.visites.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Visite::destroy($id);
         return redirect()-> route('controler.visites.index');
    }
}
