@extends("layout.index")

@section('title', "show pizza")

@section("content")

<h2>Edit Item</h2><br>

<form action="{{route("pizza.update", $pizzas->id)}}" method="post">  
     @csrf   
     @method("PUT")
    <label for="name">Name:</label><br>
    <input type="text" id="name" name="name" placeholder="pizza name" value="{{ $pizzas->name }}" /><br>

    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price" placeholder="Price" value="{{ $pizzas->price }}" /><br><br>

    <label>Colors:</label><br><br>
    
    <input type="checkbox" name="colors[]" value="red" />red<br>
    <input type="checkbox" name="colors[]" value="blue" />blue<br>
    <input type="checkbox" name="colors[]" value="yellow" />yellow<br><br>

    <input type="submit" value="Update Item">
</form> 
    
@endsection