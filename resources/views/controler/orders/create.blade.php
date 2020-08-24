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
                <form method="post" action="{{ route('controler.orders.store')}}" align="center" enctype="multipart/form-data"><input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group" align="center">
                            

                                    <label class="col-md-3">Clients</label>
                                    <div class="col-md-3">
                                    <select name="clientId" class="form-control">
                                    <option value="">Select Clients</option>
                                    @foreach($clients as $c)
                                    <option value="{{ ($c->id) }}">{{ ($c->name) }}</option>
                                    @endforeach
                                    </select>
                                    </div>
                                    <label class="col-md-3">Date de la commande</label>
                                    <div class="col-md-3"><input type="date" name="orderDate"  class="form-control" placeholder="Enter la date" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Date requise</label>
                                    <div class="col-md-3"><input type="date" name="requieredDate"  class="form-control" placeholder="Enter la date" ></div>
                                    <div class="clearfix"></div>
                                    <br><br>

                        <div class="form-group"><input type="submit" class="btn btn-info " style="width: 40%" value="save"></div>

                    </form>
                </div> 
            </div>          
         </div>
    </section>      

@endsection
