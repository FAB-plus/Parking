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
                <form method="post" action="{{ route('controler.suppliers.store')}}" align="center" enctype="multipart/form-data"><input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group" align="center">
                            
                                    <label class="col-md-3">Nom de la compagnie </label>
                                    <div class="col-md-3"><input type="text" name="companyName"  class="form-control" placeholder="Enter de la compagnie" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Nom du contrat</label>
                                    <div class="col-md-3"><input type="text" name="contractName" class="form-control" placeholder="Enter le nom du contrat" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Titre du contrat</label>
                                    <div class="col-md-3"><input type="text" name="contractTitle" class="form-control"  ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Telephone</label>
                                    <div class="col-md-3"><input type="text" name="telephone" class="form-control"  ></div>
                                    <div class="clearfix"></div>
                                    <br>
                        <div class="form-group"><input type="submit" class="btn btn-info " style="width: 40%" value="save"></div>

                    </form>
                </div> 
            </div>          
         </div>
    </section>      

@endsection
