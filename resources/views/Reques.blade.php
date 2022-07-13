<html>

<body>
    <h2>Forms</h2>
    <form action="{{ url('sub') }}" method="post">
        @csrf
        <label for="fname">First name:</label><br>
        <input type="text" id="fname" name="fname"><br>

        <label for="lname">Last name:</label><br>
        <input type="text" id="lname" name="lname"><br><br>

        <input type="submit" value="Submit">
    </form>

</body>

</html>
