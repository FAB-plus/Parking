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
        <th>Nom du produit</th>
        <th>Id de supplies</th>
        <th>La quantité</th>
        <th>Le prix Unitaire</th>
        <th>Total</th>
        <th>Actions</th>
    </tr>

    @foreach( $ordersupplies as $n  )
    <tr>
        <td>{{ $n->id  }}</td>
        <td>{{ $n->productId  }}</td>
        <td>{{ $n->suppliesId  }}</td>
        <td>{{ $n->quantity  }}</td>
        <td>{{ $n->price  }}</td>
        <td class="price"> {{ number_format($n->quantity * $n->price, 2)  }}</td>
        <td><a href="{{ route('controler.ordersupplies.edit', $n->id)  }}" class="btn btn-info">Edit</a>
        &nbsp;&nbsp;
        <a href="javascript:void(0)" onclick="$(this).parent().find('form').submit(); return confirm('Are you sure?') " class="btn btn-danger">Delete</a>
        <form action="{{ route('controler.ordersupplies.destroy', $n->id)  }}" method="post">
        @method('DELETE')
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        </form></td>
    </tr>
    @endforeach
    </table>
</div>
</div>
@endsection    

