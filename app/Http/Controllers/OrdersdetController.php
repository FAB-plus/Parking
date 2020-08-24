<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrdersDetails;
use App\Product;
use App\Supplier;
use App\Order;

class OrdersdetController extends Controller
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
        $arr['orders_details'] = OrdersDetails::all();
        return view('controler.ordersdet.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['orders_details'] = Ordersdetails::all();
        $arr['suppliers'] = Supplier::all();
        $arr['products'] = Product::all();
        return view('controler.ordersdet.create')->with($arr); 
    }

    public function orderdetailsById($id){
        $arr['orders'] = Order::findOrFail($id);
        $arr['products'] = Product::all();
        return view('controler.ordersdet.create')->with($arr);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, OrdersDetails $orders_details)
    {
       $orders_details->productId = $request->productId;
       $orders_details->orderId = $request->orderId;
       $orders_details->unitPrice = $request->unitPrice;
       $orders_details->quantity = $request->quantity;
      
       $qte = $request ->quantity; 
       $productId = $request ->productId;

       $product = Product::findOrFail($productId);

       $oldqte = $product->UnitinStock;
       

       $result = $oldqte - $qte;
       $product->UnitinStock = $result;
       if ($result<0) {
           return('Produit pas dispo');
       }else {
            $orders_details->save();
       }
      
       $product->save();

       return redirect()->route('controler.ordersdet.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $arr['orders_details'] = orderDetails::findOrFail($id);
        return view('controler.ordersdet.show')->with($arr);
    }

    public function getAllById($orderId){
        $arr['orders_details'] = OrdersDetails::where('orderId', $orderId)->get();
        return view('controler.ordersdet.index')->with($arr);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(OrdersDetails $orders_details)
    {
            $arr['orders_details'] = $orders_details;
            $arr['products'] = Product::all();
            $arr['suppliers'] = Supplier::all();
            return view('controler.ordersdet.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, OrdersDetails $orders_details)
    {
       $orders_details->productId = $request->productId;
       $orders_details->orderId = $request->orderId;
       $orders_details->unitPrice = $request->unitPrice;
       $orders_details->quantity = $request->quantity;
       $ordersdet->save();
       return redirect()->route('controler.ordersdet.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $orders_details = OrdersDetails::findOrFail($id);

       $productId = $orders_details->productId;

       $product = Product::findOrFail($productId);
       
       $oldqte = $product->UnitinStock;
       $newqte = $orders_details->quantity;
       $result = $oldqte + $newqte;

       $product->UnitinStock=$result;



       $product->save();

        OrdersDetails::destroy($id);

        return redirect()->route('controler.ordersdet.index');
    }
}
