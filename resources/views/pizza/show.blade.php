@extends("layout.index")

@section('title', "show pizza")

@section("content")

    <h1>SHOW a product details </h1>
    <p>Name - {{ $pizza->name }}</p>
    <p>Price - R {{ $pizza->price}}</p><br/>
    
    <p>Colours:</p>
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
    
    <!-- this method overide the post method in the form method ,because the browser doesnt understand the delete -->
    <a href="/pizza/{{$pizza->id}}/edit"> Edit </a><button></button>
    
    <br />
    <a href="/pizza"> -> Back to Pizzas</a>
    
@endsection