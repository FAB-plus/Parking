@extends('layouts.controleur')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Assurance</h1>
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
                <form method="post" action="{{ route('controler.gerer.update', $assurances->id)}}" align="center" enctype="multipart/form-data">
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group" align="center">
                            
                                    <label class="col-md-3">Date Assurance</label>
                                    <div class="col-md-3"><input type="date" name="date_ass" class="form-control" placeholder="Enter date" value="{{ $assurances->date_ass}}"  ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Expiration Assurance</label>
                                    <div class="col-md-3"><input type="date" name="Expiration_ass" class="form-control" placeholder="Enter Expiration" 
                                    value="{{ $assurances->Expiration_ass}}" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Vehicule</label>
                                    <div class="col-md-3">
                                    <select name="Vehicule_id" class="form-control">
                                    <option value="">Select Vehicules</option>
                                    @foreach($vehicules as $c)
                                    <option value="{{ ($c->Num_Veh) }}">{{ ($c->Num_Veh) }}</option>
                                    @endforeach
                                    </select>
                                    </div><br><br><br>

                        <div class="form-group"><input type="submit" class="btn btn-info " style="width: 40%" value="save"></div>

                    </form>
                </div> 
            </div>          
         </div>
    </section>      

@endsection