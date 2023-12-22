@extends("layout.index")

@section('title', "SANDF")

@section("content")
    <main style="background-color:coral;">
        
        <header>hearder section</header>
        <section>
            contents

            <h2>HTML Forms</h2>

            <form action="/">     
                <label for="fname">First name:</label><br>
                <input type="text" id="fname" name="fname" placeholder="John" /><br>

                <label for="lname">Last name:</label><br>
                <input type="text" id="lname" name="lname" placeholder="Doe" /><br><br>

                <label for="Uname">User name:</label><br>
                <input type="text" id="Uname" name="Uname" placeholder="User name" /><br><br>

                <label for="email">email:</label><br>
                <input type="email" id="email" name="email" placeholder="email@test.com" /><br><br>
                
                <label for="password">password:</label><br>
                <input type="password" id="password" name="password" placeholder="password" /><br><br>
                
                <label for="title">title:</label><br>
                <input type="text" id="title" name="title" placeholder="title" /><br><br>

                <input type="submit" value="Submit">
            </form> 

            <p>If you click the "Submit" button, the form-data will be sent to a page called "/action_page.php".</p>
        </section>
    </main> 
@endsection