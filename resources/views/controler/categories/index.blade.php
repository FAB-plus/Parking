@extends('layouts.controleur')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Categorie</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=" {{ route('home')}} ">Dashboard</a></li>
              <li class="breadcrumb-item active">Categorie</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
          <p>
          <a href="{{ route('controler.categories.create') }}" class="btn btn-primary">Add New Categorie</a>
</p>
          <table class="table table-bordered table-striped">
              <tr>
                  <th>Id</th>
                  <th>categoryName</th>
                  <th>Description</th>
                  <th>Actions</th>
                  
                  

              </tr>
              
              @foreach(  $categories  as $d)
              <tr>
                  <td>{{ $d->id}}</td>
                  <td>{{ $d->categoryName}}</td>
                  <td>{{ $d->Description}}</td>
                  <td><a href="{{ route('controler.categories.edit', $d->id)}}" class="btn btn-info">Edit</a> 
                  &nbsp;&nbsp;
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit(); return confirm('Are you sure?')" class="btn btn-danger">Delete</a>
                  <form action="{{ route('controler.categories.destroy', $d->id )}}" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                  </form> </td>
              </tr>
              @endforeach
          </table>
        
      </div>
    </div>     
@endsection