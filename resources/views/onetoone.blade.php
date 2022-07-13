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
    <div class="text-center container">
        <h1 class="mb-5"> Table</h1>
      
        <hr>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3> Table one to one</h3>
                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <td>{{ $phone['id']}}</td>
                                <td>{{ $phone['phone']}}</td>
                            </tr>
    
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h3> Table one to many</h3>
                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Name</th>
                            <th>Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                    
                            @php
                            $i = 0;
                            @endphp

                            @foreach ($otm as $list)
                                @php
                               
                                    $i++;
                                @endphp
                                <tr>
                                    <td>{{ $i }}</td>
                                    <td>{{ $list['name'] }}</td>
                                    <td>{{ $list['pro']['phone'] }}</td>

                                </tr>
                            @endforeach

    
                    </tbody>
                </table>
            </div>
            
        </div>
    </div>
</body>

</html>
