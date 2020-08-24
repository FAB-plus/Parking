<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Client;
use App\OrdersDetails;

class OrdersController extends Controller
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
        $arr['orders'] = Order::all();
        return view('controler.orders.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['orders'] = Order::all();
        $arr['clients'] = Client::all();
        return view('controler.orders.create')->with($arr);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Order $orders)

    {
       $orders->clientId = $request->clientId;
       $orders->orderDate = $request->orderDate;
       $orders->requieredDate = $request->requieredDate;
       $orders->save();
       return redirect()->route('controler.orders.index');     
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
    public function edit(Order $orders)
    {
            $arr['orders'] = $orders;
            $arr['clients'] = Client::all();
            return view('controler.orders.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $orders)
    {
       $orders->clientId = $request->clientId;
       $orders->orderDate = $request->orderDate;
       $orders->requieredDate = $request->requieredDate;
       $orders->save();
       return redirect()->route('controler.orders.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Order::destroy($id);
        return redirect()->route('controler.orders.index');
    }
}
