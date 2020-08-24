@extends('layouts.controleur')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Vehicules</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=" {{ route('home')}} ">Dashboard</a></li>
              <li class="breadcrumb-item active">Vehicules</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
          <p>
          <a href="{{ route('admin.vehicules.create') }}" class="btn btn-primary">Add New Vehicule</a>
</p>
          <table class="table table-bordered table-striped">
              <tr>
                  <th>Id</th>
                  <th>Numero Vehicule</th>
                  <th>Marque Vehicule</th>
                  <th>Modele Vehicule</th>
                  <th>Annee Vehicule </th>
                  <th>Couleur Vehicule </th>
                  <th>Actions</th>
                  
                  

              </tr>
              @foreach($vehicules as $v)
              <tr>
                  <td>{{ $v->id}}</td>
                  <td>{{ $v->Num_Veh}}</td>
                  <td>{{ $v->Marque_Veh}}</td>
                  <td>{{ $v->Modele_Veh}}</td>
                  <td>{{ $v->Annee_Veh}}</td>
                  <td>{{ $v->Couleur_Veh}}</td>
                  <td><a href="{{route('controler.vehicules.index', $v->id)  }}" class="btn btn-info">Edit</a> 
                  &nbsp;&nbsp;
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit(); return confirm('Are you sure?')" class="btn btn-danger">Delete</a><form action="{{ route('controler.vehicules.destroy', $v->id )}}" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                  </form> </td>
              </tr>
              @endforeach
          </table>
        
      </div>
    </div>     
@endsection