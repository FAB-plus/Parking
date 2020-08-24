<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Assurance;
use App\Vehicule;

class AssuranceController extends Controller
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
       $arr['assurances'] = Assurance::all();
       $arr['vehicules'] = Vehicule::all();
       return view('controler.gerer.index')->with($arr); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $arr['assurances'] = Assurance::all();
       $arr['vehicules'] = vehicule::all();
       return view('controler.gerer.create')->with($arr);
    }

    public function expired_date(){
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Assurance $assurance)
    {
        $assurance->date_ass = $request->date_ass;
        $assurance->Expiration_ass = $request->Expiration_ass;
        $assurance->vehicules_id = $request->vehicules_id;
        $assurance->save();
        return redirect()-> route('controler.gerer.index');
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
    public function edit(Assurance $assurance) 
       {
        $arr['assurances'] = $assurance;
        $arr['vehicules'] = Vehicule::all();
        return view('controler.gerer.edit');
       }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assurance $assurance)
    {
        $assurance->date_ass = $request->date_ass;
        $assurance->Expiration_ass = $request->Expiration_ass;
        $assurance->vehicules_id = $request->vehicules_id;
        $assurance->save();
        return redirect()-> route('controler.gerer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Assurance::destroy($id);
        return redirect()-> route('controler.gerer.index');

    }
}
