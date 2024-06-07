@extends('layouts.admin')

@section('content')

@if ($errors->any())
<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif

<form action="{{route('admin.products.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
      <label for="product-name" class="form-label">Nome prodotto</label>
      <input type="text" class="form-control" id="product-name" name="name">
    </div>
    <div class="mb-3">
      <label for="product-image" class="form-label">Immagine del prodotto</label>
      <input class="form-control" type="file" id="product_image" name="image">
    </div>
    <div class="mb-3">
      <label for="price" class="form-label">Prezzo del prodotto</label>
      <input type="number" class="form-control" id="price" name="price">
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Stock prodotto</label>
        <input type="number" class="form-control" id="quantity" name="quantity">
      </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea type="text" class="form-control" id="description" name="description"></textarea>
      </div>
    <button type="submit" class="btn btn-primary">Create</button>
</form>
@endsection