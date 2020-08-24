<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Ordersupplies;
use App\Product;
use App\Supplier;
use App\Supply;

class OrdersuppliesController extends Controller
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
        $arr['ordersupplies'] = Ordersupplies::all();
        return view('controler.ordersupplies.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['ordersupplies'] = Ordersupplies::all();
        $arr['supplies'] = Supply::all();
        $arr['products'] = Product::all();
        $arr['suppliers'] = Supplier::all();
        return view('controler.ordersupplies.create')->with($arr);
    }

    public function ordersuppliesById($id){
        $arr['supplies'] = Supply::findOrFail($id);
        $arr['products'] = Product::all();
        return view('controler.ordersupplies.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Ordersupplies $ordersupplies)
    {
        $ordersupplies->productId = $request->productId;
        $ordersupplies->suppliesId = $request->suppliesId;
        $ordersupplies->quantity = $request->quantity;
        $ordersupplies->price = $request->price;
       


        $qte = $request->quantity;
        $productId = $request ->productId;

        $product = Product::findOrFail($productId);
        $oldqte = $product->UnitinStock;
        $result = $oldqte + $qte;
        $product->UnitinStock = $result;

        $product->save();
        $ordersupplies->save();
        return redirect()->route('controler.ordersupplies.index');

    }

    public function getAllById($suppliesId){
        $arr['ordersupplies'] = Ordersupplies::where('suppliesId', $suppliesId)->get();
        return view('controler.ordersupplies.index')->with($arr);
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
    public function edit(Ordersupplies $ordersupplies)
    {
        $arr['ordersupplies'] = $ordersupplies;
        $arr['products'] = Product::all();
        $arr['suppliers'] = Supplier::all();
        $arr['supplies'] = Supply::all();
        return view('controler.ordersupplies.edit')->with($arr);
     }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ordersupplies $ordersupplies)
    {
        $ordersupplies->productId = $request->productId;
        $ordersupplies->suppliesId = $request->suppliesId;
        $ordersupplies->quantity = $request->quantity;
        $ordersupplies->price = $request->price;
        $ordersupplies->save();
        return redirect()->route('controler.ordersupplies.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ordersupplies = Ordersupplies::findOrFail($id);

        $productId = $ordersupplies->productId;
        $product = Product::findorFail($productId);
        $oldqte = $product->UnitinStock;
        $qte = $ordersupplies->quantity;
        $result = $oldqte - $qte;
        $product->UnitinStock=$result;

        $product->save();

        Ordersupplies::destroy($id);
        return redirect()->route('controler.ordersupplies.index');
    }
}
