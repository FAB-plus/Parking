@extends('layouts.controleur')

@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Edit Commande</h1>
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
                <form method="post" action="{{ route('controler.products.store')}}" align="center" enctype="multipart/form-data"><input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="form-group" align="center">
                            
                                    <label class="col-md-3">Nom du produit</label>
                                    <div class="col-md-3"><input type="text" name="productName"  class="form-control" placeholder="Enter le nom du produit" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Suppliers</label>
                                    <div class="col-md-3">
                                    <select name="supplierId" class="form-control">
                                    <option value="">Select Supplier</option>
                                    @foreach($suppliers as $s)
                                    <option value="{{ ($s->id) }}">{{ ($s->companyName) }}</option>
                                    @endforeach
                                    </select>
                                    </div>
                                    <label class="col-md-3">Categories</label>
                                    <div class="col-md-3">
                                    <select name="categoryId" class="form-control">
                                    <option value="">Select Category</option>
                                    @foreach($categories as $b)
                                    <option value="{{ ($b->id) }}">{{ ($b->categoryName) }}</option>
                                    @endforeach
                                    </select>
                                    </div>
                                    <label class="col-md-3">Quantite par unité</label>
                                    <div class="col-md-3"><input type="text" name="quantityPerUnit" class="form-control" placeholder="Enter la quantité" ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Prix Unitaire</label>
                                    <div class="col-md-3"><input type="text" name="unitPrice" class="form-control"  ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Unité en stock</label>
                                    <div class="col-md-3"><input type="text" name="UnitinStock" class="form-control"  ></div>
                                    <div class="clearfix"></div>
                                    <label class="col-md-3">Unité dans la commande</label>
                                    <div class="col-md-3"><input type="text" name="UnitonOrder" class="form-control"  ></div>
                                    <div class="clearfix"></div>
                                    <br><br><br>

                        <div class="form-group"><input type="submit" class="btn btn-info " style="width: 40%" value="save"></div>

                    </form>
                </div> 
            </div>          
         </div>
    </section>      

@endsection