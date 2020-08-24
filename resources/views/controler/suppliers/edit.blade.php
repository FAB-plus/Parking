@extends('layouts.controleur')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Supplier</h1>
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
                <form method="post" action="{{ route('controler.suppliers.update', $suppliers->id)}}" align="center" enctype="multipart/form-data">
                @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group" align="center">
                            
                                    <label class="col-md-3">Nom de la compagnie</label>
                                    <div class="col-md-3"><input type="text" name="companyName" class="form-control" placeholder="Enter le nom de la compagnie" value="{{ $suppliers->companyName}}"  ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Nom du contrat</label>
                                    <div class="col-md-3"><input type="text" name="contractName" class="form-control" placeholder="Enter le nom du contrat" 
                                    value="{{ $suppliers->contractName}}" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">contractTitle</label>
                                    <div class="col-md-3"><input type="text" name="contractTitle" class="form-control" placeholder= "Entrer le titre du contrat" value="{{ $suppliers->contractTitle}}" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Telephone</label>
                                    <div class="col-md-3"><input type="text" name="Telephone" class="form-control" placeholder= "Entrer le telephone" value="{{ $suppliers->telephone}}" ></div>
                                    <div class="clearfix"></div>
                                    <br><br><br>

                        <div class="form-group"><input type="submit" class="btn btn-info " style="width: 40%" value="save"></div>

                    </form>
                </div> 
            </div>          
         </div>
    </section>      

@endsection