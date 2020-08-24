@extends('layouts.controleur')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Supplies</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=" {{ route('home')}} ">Dashboard</a></li>
              <li class="breadcrumb-item active">Supplies</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
          <p>
          <a href="{{ route('controler.supplies.create') }}" class="btn btn-primary">Add New Supply</a>
</p>
          <table class="table table-bordered table-striped">
              <tr>
                  <th>Id</th>
                  <th>Date</th>
                  <th>Suppliers</th>
                  <th>Actions</th>
                  
                  

              </tr>
              
              @foreach(  $supplies  as $c)
              <tr>
                  <td>{{ $c->id}}</td>
                  <td>{{ $c->date}}</td>
                  <td>{{ $c->supplierId}}</td>
                  <td><a href="{{route('lister', ['id' => $c->id])}}" class="btn btn-primary">View</a> 
                  &nbsp;&nbsp;
                 <a href="{{route('ajouter', ['id' => $c->id])}}" class="btn btn-success">+</a>
                 &nbsp;&nbsp;
                 <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit(); return confirm('Are you sure?')" class="btn btn-danger">Delete</a><form action="{{ route('controler.supplies.destroy', $c->id )}}" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                  </form> </td>
              </tr>
              @endforeach
          </table>
        
      </div>
    </div>     
@endsection