@extends('layouts.controleur')

@section('content')
<div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Produits</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href=" {{ route('home')}} ">Dashboard</a></li>
              <li class="breadcrumb-item active">Produits</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>

    <div class="content">
      <div class="container-fluid">
          <p>
          <a href="{{ route('controler.products.create') }}" class="btn btn-primary">Add New Product</a>
</p>
          <table class="table table-bordered table-striped">
              <tr>
                  <th>Id</th>
                  <th>Nom du produit</th>
                  <th>Nom du fournisseur</th>
                  <th>Nom de la categorie</th>
                  <th>Quantité par unité</th>
                  <th>Prix Unitaire</th>
                  <th>Unité en stock</th>
                  <th>unité pour la commande</th>
                  <th>Actions</th>
                  
                  

              </tr>
              
              @foreach(  $products  as $c)
              <tr>
                  <td>{{ $c->id}}</td>
                  <td>{{ $c->productName}}</td>
                  <td>{{ $c->supplierId}}</td>
                  <td>{{ $c->categoryId}}</td>
                  <td>{{ $c->quantityPerUnit}}</td>
                  <td>{{ $c->unitPrice}}</td>
                  <td>{{ $c->UnitinStock}}</td>
                  <td>{{ $c->UnitonOrder}}</td>
                  <td><a href="{{ route('controler.products.edit', $c->id)}}" class="btn btn-info">Edit</a> 
                  &nbsp;&nbsp;&nbsp;
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit(); return confirm('Are you sure?')" class="btn btn-danger">Delete</a><form action="{{ route('controler.products.destroy', $c->id )}}" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                  </form> </td>
              </tr>
              @endforeach
          </table>
        
      </div>
    </div>     
@endsection