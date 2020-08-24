<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Client;
use App\User;
use App\Vehicule;

class ClientsController extends Controller
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
       $arr['clients'] = Client::all();
       $arr['vehicules'] = Vehicule::all();
       return view('controler.clients.index')->with($arr); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $arr['clients'] = Client::all();
       $arr['vehicules'] = vehicule::all();
       return view('controler.clients.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Client $client)
    {
        $client->name = $request->name;
        $client->prenom = $request->prenom;
        $client->email = $request->email;
        $client->vehicules_id = $request->vehicules_id;
        $client->save();
        return redirect()-> route('controler.clients.index');
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
    public function edit(Client $clients)
    {
        $arr['clients'] = $clients;
        $arr['vehicules'] = Vehicule::all();
        return view('controler.clients.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        $client->name = $request->name;
        $client->prenom = $request->prenom;
        $client->email = $request->email;
        $client->vehicules_id = $request->vehicules_id;
        $client->save();
        return redirect()-> route('controler.clients.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Client::destroy($id);
        return redirect() -> route('controler.clients.index');
    }
}
