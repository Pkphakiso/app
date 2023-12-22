@extends("layout.index")

@section('title', "show pizza")

@section("content")

<h2>ADD Pizza</h2><br>

<form action="/pizza" method="post">  
     @csrf   
    <label for="name">Pizza name:</label><br>
    <input type="text" id="name" name="name" placeholder="pizza name" /><br>

    <label for="price">Price:</label><br>
    <input type="text" id="price" name="price" placeholder="Price" /><br><br>

    <label>Topping:</label><br>
    <input type="checkbox" name="topping[]" value="one" />One<br><br>
    <input type="checkbox" name="topping[]" value="two" />Two<br><br>
    <input type="checkbox" name="topping[]" value="three" />Three<br><br>

    <input type="submit" value="Add Pizza">
</form> 
    
@endsection