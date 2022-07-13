<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Update</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        crossorigin="anonymous">
</head>

<body class="m-5">


    <h1>Data Show</h1>

    <table class="table" border="1">
        @foreach ($users as $user)
            <tr>
                <td> {{ $user->name }}</td>
                <td>{{ $user->password }} </td>
                <td> <a href="Delete/{{ $user->id }}">Delete</a> </td>
                <td> <a href="Update/{{ $user->id }}">Update</a> </td>
            </tr>
        @endforeach
    </table>
</body>

</html>
