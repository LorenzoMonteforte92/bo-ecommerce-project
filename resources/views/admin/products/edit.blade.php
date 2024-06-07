@extends('layouts.admin')

@section('content')
<h1>Modifica il prodotto: {{ $product->name }}</h1>
<form action="{{ route('admin.products.update', $product->id) }}" method="post">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="name" class="form-label">Nome prodotto</label>
        <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Prezzo</label>
        <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
    </div>
    <div class="mb-3">
        <label for="quantity" class="form-label">Quantità</label>
        <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
    </div>
    <div class="mb-3">
        <label for="category" class="form-label">Categoria del prodotto</label>
        <input type="text" class="form-control" id="category" name="category" value="{{ $product->category }}">
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Immagine</label>
        <input class="form-control" type="file" id="image" name="image">
        
        @if ($product->image)
            <div>
                <img src="{{ $product->image }}" alt="{{ $product->title }}">
            </div>
        @else
            <small>Nessuna immagine caricata</small>
        @endif
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <textarea class="form-control" id="description" rows="10" name="description">{{ $product->description }}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Salva</button>
</form>
@endsection