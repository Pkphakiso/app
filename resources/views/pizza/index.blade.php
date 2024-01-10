@extends("layout.index")

@section('title', "Pizzas")

@section("content")
    <h1><b>Product In our Store</b></h1>
    <ul>
        @foreach ($pizza as $product)
            <li>Name - {{ $product->name }} @ R{{ $product->price}} <a href="/pizza/{{$product->id}}">view item</a></li>
        @endforeach
    </ul>    
    <p>{{ session("success")}}</p> 
@endsection 