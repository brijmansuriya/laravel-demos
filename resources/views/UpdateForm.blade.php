<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inset Data</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        crossorigin="anonymous">
</head>

<body>
    <div class="container mt-5">
        <h1>Inset Data</h1>
        <form action="{{ url('Updatesubmit') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text"  class="form-control" id="Username" name="Username" value="{{ $users['name'] }}"><br>
                <input type="hidden" id="id" name="id" value="{{ $users['id'] }}"><br>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Password</label>
                <input type="text" class="form-control" id="Password" name="Password" value="{{ $users['password'] }}"><br><br>
                <input type="submit" class="btn btn-warning" value="Submit">
            </div>
        </form>
    </div>
</body>

</html>
