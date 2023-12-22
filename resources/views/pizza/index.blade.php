@extends("layout.index")

@section('title', "Pizzas")

@section("content")
    <h1><b>Pizza In Store</b></h1>
    <ul>
        @foreach ($pizza as $product)
            <li>Name - {{ $product->name }} @ R{{ $product->price}} <a href="/pizza/{{$product->id}}">go to id -{{$product->id}}</a></li>
        @endforeach
    </ul>    
    <p>{{ session("success")}}</p> 
@endsection