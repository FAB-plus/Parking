@extends('layouts.controleur')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Assurance</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=" {{ route('home')}} ">Dashboard</a></li>
              <li class="breadcrumb-item active">Assurance</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
          <p>
          <a href="{{ route('controler.visites.create') }}" class="btn btn-primary">Add New visite</a>
</p>
          <table class="table table-bordered table-striped">
              <tr>
                  <th>Id</th>
                  <th>Derniere visite</th>
                  <th>Prochaine visite</th>
                  <th>Vehicules</th>
                  <th>Actions</th>
                  
                  

              </tr>
              
              @foreach( $visites  as $c)
              <tr>
                  <td>{{ $c->id}}</td>
                  <td>{{ $c->date_visite}}</td>
                  <td>{{ $c->Expiration_visite}}</td>
                  <td>{{ $c->vehicules_id}}</td>
                  <td><a href="{{ route('controler.visites.edit', $c->id)}}" class="btn btn-info">Edit</a> 
                  &nbsp;&nbsp;
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit(); return confirm('Are you sure?')" class="btn btn-danger">Delete</a><form action="{{ route('controler.visites.destroy', $c->id )}}" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                  </form> </td>
              </tr>
              @endforeach
          </table>
        
      </div>
    </div>     
@endsection