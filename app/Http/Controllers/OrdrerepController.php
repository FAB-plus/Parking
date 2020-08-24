<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordrerep;
use App\Client;
use App\Vehicule;
use PDF; 

class OrdrerepController extends Controller
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
        $arr['ordrereps'] = Ordrerep::all();
        return view('controler.ordrerep.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['ordrereps'] = Ordrerep::all();
        $arr['clients'] = Client::all();
        $arr['vehicules'] = Vehicule::all();

        return view('controler.ordrerep.create')->with($arr);
    }

    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Ordrerep $ordrereps)
    {
        $ordrereps->date_ordre = $request->date_ordre;
        $ordrereps->code = $request->code;
        $ordrereps->designation = $request->designation;
        $ordrereps->coderep = $request->coderep;
        $ordrereps->quantity = $request->quantity;
        $ordrereps->Observations = $request->Observations;
        $ordrereps->clientId = $request->clientId;
        $ordrereps->Vehicule_id = $request->Vehicule_id;
        $ordrereps->save();
        return redirect()->route('controler.ordrerep.index');

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
    public function edit(Ordrerep $ordrereps)
    {
            $arr['ordrereps'] = $ordrereps;
            $arr['clients'] = Client::all();
            $arr['vehicules'] = Vehicule::all();
            return view('controler.ordrerep.edit')->with($arr);
    }

    public function pdf($id){
       $ordrereps = Ordrerep::with(['client','cmde'])->find($id);
       $pdf= PDF::loadView('controler.ordrerep.pdf', ['ordrereps' => $ordrereps])->setPaper('a4', 'portrait');
       return $pdf->stream('ordrerep.pdf'); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordrerep $ordrereps)
    {
        $ordrereps->date_ordre = $request->date_ordre;
        $ordrereps->code = $request->code;
        $ordrereps->designation = $request->designation;
        $ordrereps->coderep = $request->coderep;
        $ordrereps->quantity = $request->quantity;
        $ordrereps->Observations = $request->Observations;
        $ordrereps->clientId = $request->clientId;
        $ordrereps->Vehicule_id = $request->vehicule_id;
        $ordrereps->save();
        return redirect()->route('controler.ordrerep.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Ordrerep::destroy($id);
        return redirect()->route('controler.ordrerep.index');
    }
}
