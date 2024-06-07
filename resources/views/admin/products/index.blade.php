@extends('layouts.admin')

@section('content')
<h1>Prodotti in vendita</h1>
<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Nome prodotto</th>
        <th scope="col">Quantità disponibile</th>
        <th scope="col">Prezzo</th>
        <th scope="col">Categoria</th>
        <th scope="col">Creazione</th>
        <th scope="col">Ultima modifica</th>
        <th scope="col">Azioni</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->category}}</td>
            <td>{{$product->created_at}}</td>
            <td>{{$product->updated_at}}</td>
            <td>
                <a href="{{  route('admin.products.show', ['product' => $product->id])}}"><i class="fa-regular fa-eye"></i></a>
            </td>
            <td>
              <a href="{{  route('admin.products.edit', ['product' => $product->id])}}"><i class="fa-solid fa-pen"></i></a>
            </td>
        </tr>
      @endforeach
    </tbody>
  </table>
@endsection