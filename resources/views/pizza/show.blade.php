@extends("layout.index")

@section('title', "show pizza")

@section("content")

    <h1>SHOW a Pizza </h1>
    <p>Name - {{ $pizza->name }}</p>
    <p>Price - R {{ $pizza->price}}</p>
    <p>Extra topping:</p>
    <ul>
        @foreach ($pizza->topping as $topping)
            <li>Is - {{ $topping }}</li>
        @endforeach
    </ul> 
    <!-- <form action="/pazza///$pizza->id}}" method="post"> -->
    <form action="{{route("pizza.destroy", $pizza->id)}}" method="post">

        @csrf
        @method("DELETE") <!-- this method overide the post method in the form method ,because the browser doesnt understand the delete -->
        <button>delete</button>
    </form>

    <a href="/pizza"> -> Back to Pizzas</a>
    
@endsection