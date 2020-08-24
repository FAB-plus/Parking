<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supply;
use App\Supplier;
use App\Ordersupplies;
use App\Product;

class SuppliesController extends Controller
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
        $arr['supplies'] = Supply::all();
        return view('controler.supplies.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['supplies'] = Supply::all();
        $arr['suppliers'] = Supplier::all();
        return view('controler.supplies.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Supply $supplies)
    {
       $supplies-> date = $request->date;
       $supplies-> supplierId = $request->supplierId;
       $supplies->save();  
       return redirect()-> route('controler.supplies.index'); 
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
    public function edit(Supply $supplies)
    {
        $arr['supplies'] = $supplies;
        $arr['suppliers'] = Supplier::all();

        return view('controler.supplies.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supply $supplies)
    {
       $supplies-> date = $request->date;
       $supplies-> supplierId = $request->supplierId;
       $supplies->save();
       return redirect()-> route('controler.supplies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Supply::destroy($id);
        return redirect()-> route('controler.supplies.index');
        
    }
}
