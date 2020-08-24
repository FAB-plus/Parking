<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
use App\Supplier;

class ProductsController extends Controller
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
        $arr['products'] = Product::all();
        return view('controler.products.index')->with($arr);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $arr['products'] = Product::all();
        $arr['categories'] = Category::all();
        $arr['suppliers'] = Supplier::all();
        return view('controler.products.create')->with($arr);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $products )
    {
        $products->productName = $request->productName;
        $products->supplierId = $request->supplierId;
        $products->categoryId = $request->categoryId;
        $products->quantityPerUnit = $request->quantityPerUnit;
        $products->unitPrice = $request->unitPrice;
        $products->UnitinStock = $request->UnitinStock;
        $products->UnitonOrder = $request->UnitonOrder;
        $products->save();
        return redirect()->route('controler.products.index');
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
    public function edit(Product $products)
    {
            $arr['products'] = $products;
            $arr['suppliers'] = Supplier::all();
            $arr['categories'] = Category::all();
            return view('controler.products.edit')->with($arr);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $products)
    {
        $products->productName = $request->productName;
        $products->supplierId = $request->supplierId;
        $products->categoryId = $request->categoryId;
        $products->quantityPerUnit = $request->quantityPerUnit;
        $products->unitPrice = $request->unitPrice;
        $products->UnitinStock = $request->UnitinStock;
        $products->UnitonOrder = $request->UnitonOrder;
        $products->save();
        return redirect()->route('controler.products.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy('$id');
        return redirect()->route('controler.products.index');
    }
}
