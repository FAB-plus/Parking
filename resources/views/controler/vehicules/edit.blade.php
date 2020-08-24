@extends('layouts.controleur')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Vehicule</h1>
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
                <form method="post" action="{{ route('controler.vehicules.update', $vehicules->id)}}" align="center" enctype="multipart/form-data">
                 @method('PUT')
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group" align="center">
                            
                                    <label class="col-md-3">Numéro Vehicule</label>
                                    <div class="col-md-3"><input type="text" name="Num_Veh" class="form-control" placeholder="Enter le numéro"
                                    value="{{ $vehicules->Num_Veh}}" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Marque du Véhicule</label>
                                    <div class="col-md-3"><input type="text" name="Marque_Veh" class="form-control" placeholder="Enter la Marque" value="{{ $vehicules->Marque_Veh}}"   ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Modele du Véhicule</label>
                                    <div class="col-md-3"><input type="text" name="Modele_Veh" class="form-control" placeholder="Entrer le Modele" value="{{ $vehicules->Modele_Veh}}"    ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Année du Vehicule</label>
                                    <div class="col-md-3"><input type="date" name="Annee_Veh" class="form-control" placeholder="Entrer l'année" value="{{ $vehicules->Annee_Veh}}"    ></div>
                                    <div class="clearfix"></div>
                                     <label class="col-md-3">Couleur du Vehicule</label>
                                    <div class="col-md-3"><input type="text" name="Couleur_Veh" class="form-control" placeholder="Entrer la Couleur" value="{{ $vehicules->Couleur_Veh}}"   ></div>
                                    <div class="clearfix"></div><br><br><br>


                        <div class="form-group"><input type="submit" class="btn btn-info " style="width: 40%" value="save"></div>

                    </form>
                </div> 
            </div>          
         </div>
    </section>      

@endsection