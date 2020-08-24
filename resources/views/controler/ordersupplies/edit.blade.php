@extends('layouts.controleur')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Order</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{ route('home')  }}">Home</a></li>
              <li class="breadcrumb-item active">Dashboard v1</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
<section class="content">
        <div class="jumbotron">
            <div class="card">
                <div class="card-body">
                <form method="post" action="{{ route('controler.ordersupplies.update', $ordersupplies->id)}}" align="center" enctype="multipart/form-data">
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group" align="center">
                            
                                    <label class="col-md-3">Products</label>
                                    <div class="col-md-3">
                                    <select name="productId" class="form-control">
                                    <option value="">Select Clients</option>
                                    @foreach($products as $c)
                                    <option value="{{ ($c->id) }}">{{ ($c->productName) }}</option>
                                    @endforeach
                                    </select>
                                    </div>
                                    <label class="col-md-3">Supplies Id</label>
                                    <div class="col-md-3"><input type="text" name="suppliesId"  class="form-control"></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">La quantité</label>
                                    <div class="col-md-3"><input type="text" name="quantity"  class="form-control" placeholder="Enter la quantité" ></div>
                                    <div class="clearfix"></div>  
                                    <label class="col-md-3">Prix Unitaire</label>
                                    <div class="col-md-3"><input type="text" name="price"  class="form-control" placeholder="Enter le prix" ></div>
                                    <div class="clearfix"></div>
 
                                    <br><br>

                        <div class="form-group"><input type="submit" class="btn btn-info " style="width: 40%" value="save"></div>

                    </form>
                </div> 
            </div>          
         </div>
    </section>      

@endsection