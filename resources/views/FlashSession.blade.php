<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5 ">
        <div class="tray tray-center">


            @if (session('fname'))
                <h1>User {{ session('fname') }} Add </h1>
            @endif

            <form action="{{ url('Flashsubmit') }}" method="POST">
                @csrf
                <label for="fname">First name:</label><br>
                <input type="text" class="form-control" id="fname" name="fname"><br>

                <label for="lname">Last name:</label><br>
                <input type="text" class="form-control" id="lname" name="lname"><br><br>

                <input type="submit" class="btn btn-secondary" value="Submit">
                <a href="{{ url('Deletesubmit') }}" class="btn btn-danger" value="Delete Session">Delete Session</a>
            </form>


        </div>
    </div>
</body>

</html>
