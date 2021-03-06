@extends('layouts.controleur')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Ordre</h1>
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
                <form method="post" action="{{ route('controler.ordrerep.update', $ordrereps->id)}}" align="center" enctype="multipart/form-data">
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group" align="center">
                                    <label class="col-md-3">Date</label>
                                    <div class="col-md-3"><input type="date" name="Date_orde"  class="form-control" placeholder="Enter date"  value="{{ $ordrereps->Date_ordre}}" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Code Ordre </label>
                                    <div class="col-md-3"><input type="text" name="code" class="form-control" placeholder="Enter code" value="{{ $ordrereps->code}}"  ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Designation </label>
                                    <div class="col-md-3"><input type="text" name="designation" class="form-control" placeholder="Enter designation"  value="{{ $ordrereps->designation}}"></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Code Reparation </label>
                                    <div class="col-md-3"><input type="text" name="coderep" class="form-control" placeholder="Enter code reparation"value="{{ $ordrereps->coderep}}" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Quantité </label>
                                    <div class="col-md-3"><input type="text" name="quantity" class="form-control" placeholder="Enter quantity" value="{{ $ordrereps->quantity}}" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Observations</label>
                                    <div class="col-md-3"><input type="text" name="Observations" class="form-control" value="{{ $ordrereps->Observations}}" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Clients</label>
                                    <div class="col-md-3">
                                    <select name="clientId" class="form-control">
                                    <option value="">Select Client</option>
                                    @foreach($clients as $c)
                                    <option value="{{ ($c->id) }}">{{ ($c->name) }}</option>
                                    @endforeach
                                    </select>
                                    </div>
                                    <label class="col-md-3">Vehicule</label>
                                    <div class="col-md-3">
                                    <select name="Vehicule_id" class="form-control">
                                    <option value="">Select Vehicules</option>
                                    @foreach($vehicules as $c)
                                    <option value="{{ ($c->Num_Veh) }}">{{ ($c->Num_Veh) }}</option>
                                    @endforeach
                                    </select>
                                    </div>
                                    
                                    <br><br>

                        <div class="form-group"><input type="submit" class="btn btn-info " style="width: 40%" value="save"></div>

                    </form>
                </div> 
            </div>          
         </div>
    </section>      

@endsection