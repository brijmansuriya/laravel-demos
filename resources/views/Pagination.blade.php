<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel 8</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        crossorigin="anonymous">
</head>
<body class="m-5">
    <h1>Model With Pagination</h1>
    <table class="table" border="1">
        <thead class="thead-dark">
            <tr>
                <th scope="col">Name</th>
                <th scope="col">password</th>
            </tr>
        </thead>
        @foreach ($users as $user)
            <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->password }} </td>
            </tr>
        @endforeach
    </table>
    <samp>
        {{ $users->links('pagination::bootstrap-4') }}
    </samp>
</body>
</html>
