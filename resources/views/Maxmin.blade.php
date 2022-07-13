<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Student</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="text-center">
        <h1>Laravel Aggregates Query</h1>
        <hr>

    </div>

    <div class="row">
        <div class="col-md-4">
            <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Amount</th>

                    </tr>
                </thead>
                <tbody>
                    @php
                        $i = 0;
                    @endphp

                    @foreach ($data as $list)
                        @php
                            $i++;
                        @endphp
                        <tr>
                            <td>{{ $i }}</td>
                            <td>{{ $list->name }}</td>
                            <td>{{ $list->amount }}</td>

                        </tr>
                    @endforeach


                </tbody>
            </table>
        </div>
        <div class="col-md-4">
            <p>Sum :- {{ $sum }}</p>
            <p>Min :- {{ $min }}</p>
            <p>Max :- {{ $max }}</p>
            <p>Avg :- {{ $avg }}</p>
        </div>
    </div>




</body>

</html>
