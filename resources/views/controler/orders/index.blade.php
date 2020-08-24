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
              <li class="breadcrumb-item active">Commandes</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
          <p>
          <a href="{{ route('controler.orders.create') }}" class="btn btn-primary">Add New Commande</a>
</p>
          <table class="table table-bordered table-striped">
              <tr>
                  <th>Id</th>
                  <th>Nom du Client</th>
                  <th>Date de la commande</th>
                  <th>Date requise</th>
                  <th>Actions</th>
                  
                  

              </tr>
              
              @foreach(  $orders  as $c)
              <tr>
                  <td>{{ $c->id}}</td>
                  <td>{{ $c->clientId}}</td>
                  <td>{{ $c->orderDate}}</td>
                  <td>{{ $c->requieredDate}}</td>
                  <td><a href="{{ route('list', ['id' => $c->id])}}" class="btn btn-primary">View</a> 
                  &nbsp;&nbsp;

                  <a href="{{route('ajout', ['id' => $c->id])}}" class="btn btn-success">+</a>
                  &nbsp;&nbsp;
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit(); return confirm('Are you sure?')" class="btn btn-danger">Delete</a><form action="{{ route('controler.orders.destroy', $c->id )}}" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                  </form> </td>
              </tr>
              @endforeach
          </table>
        
      </div>
    </div>     
@endsection