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
          
</p>
          <table class="table table-bordered table-striped">
              <tr>
                  <th>Id</th>
                  <th>Nom du Produit</th>
                  <th>Id de la commande</th>
                  <th>Le prix Unitaire</th>
                  <th>La quantité</th>
                  <th>Total</th>
                  <th>Actions</th>
                  
                  

              </tr>
              
              @foreach(  $orders_details  as $c)
              <tr>
                  <td>{{ $c->id}}</td>
                  <td>{{ $c->productId}}</td>
                  <td>{{ $c->orderId}}</td>
                  <td>{{ $c->unitPrice}}</td>
                  <td>{{ $c->quantity}}</td>
                  <td class="price">{{ number_format($c->quantity * $c->unitPrice, 2)}}</td>
                  <td><a href="{{ route('controler.ordersdet.edit', $c->id)}}" class="btn btn-info">Edit</a> 
                  &nbsp;&nbsp;
                  <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit(); return confirm('Are you sure?')" class="btn btn-danger">Delete</a><form action="{{ route('controler.ordersdet.destroy', $c->id )}}" method="post">
                      @method('DELETE')
                      <input type="hidden" name="_token" value="{{ csrf_token() }}" >

                  </form> </td>
              </tr>
              @endforeach
          </table>
        
      </div>
    </div>     
@endsection