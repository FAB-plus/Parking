<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
class SuppliersController extends Controller
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
        $arr['suppliers'] = Supplier::all();
        return view('controler.suppliers.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['suppliers'] = Supplier::all();
        return view('controler.suppliers.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Supplier $suppliers)
    {
        $suppliers->companyName = $request->companyName;
        $suppliers->contractName = $request->contractName;
        $suppliers->contractTitle = $request->contractTitle;
        $suppliers->telephone = $request->telephone;
        $suppliers->save();
        return redirect()->route('controler.suppliers.index');
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
    public function edit(Supplier $suppliers)
    {
            $arr['suppliers'] = $suppliers;
            return view('controler.suppliers.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $suppliers)
    {
        $suppliers->companyName = $request->companyName;
        $suppliers->contractName = $request->contractName;
        $suppliers->contractTitle = $request->contractTitle;
        $suppliers->telephone = $request->telephone;
        $suppliers->save();
        return redirect()->route('controler.suppliers.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supplier::destroy($id);
        return redirect()->route('controler.suppliers.index');
    }
}
