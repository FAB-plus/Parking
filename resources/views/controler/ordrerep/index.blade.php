@extends('layouts.controleur')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Commandes</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=" {{ route('home')}} ">Dashboard</a></li>
              <li class="breadcrumb-item active">Ordre</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
          <p>
          <a href="{{ route('controler.ordrerep.create') }}" class="btn btn-primary">Add New Ordre</a>
</p>
          <table class="table table-bordered table-striped">
              <tr>
                  <th>Id</th>
                  <th>Date</th>
                  <th>Code Ordre</th>
                  <th>Designation</th>
                  <th>Code Reparation</th>
                  <th>Quantité</th>
                  <th>Observations</th>
                  <th>Nom du Client</th>
                  <th>Matricule</th>
                  <th>Actions</th>
                  
                  

              </tr>
              
              @foreach(  $ordrereps  as $c)
              <tr>
                  <td>{{ $c->id}}</td>
                  <td>{{ $c->date_ordre}}</td>
                  <td>{{ $c->code}}</td>
                  <td>{{ $c->designation}}</td>
                  <td>{{ $c->coderep}}</td>
                  <td>{{ $c->quantity}}</td>
                  <td>{{ $c->Observations}}</td>
                  <td>{{ $c->clientId}}</td>
                  <td>{{ $c->vehicule_id}}</td>
                  <td><a href="{{ route('controler.ordrerep.edit', $c->id)}}" class="btn btn-info">Edit</a> 
                  &nbsp;&nbsp;
                  <a href="{{ route('pdf', ['id' => $c->id])}}" class="btn btn-success">Print</a> 
                  &nbsp;&nbsp;
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit(); return confirm('Are you sure?')" class="btn btn-danger">Delete</a><form action="{{ route('controler.ordrerep.destroy', $c->id )}}" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                  </form> </td>
              </tr>
              @endforeach
          </table>
        
      </div>
    </div>     
@endsection