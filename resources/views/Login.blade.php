<html>
    <body>
    <h2>Forms</h2>
        <form action="{{ url('loginsubmit') }}" method="post">
            @csrf
        <label for="username">First name:</label><br>
        <input type="text" id="fname" name="username"><br>

        <label for="lname">Password:</label><br>
        <input type="Password" id="lname" name="Password"><br><br>

        <input type="submit" value="Submit">
        </form> 

    </body>
</html>
