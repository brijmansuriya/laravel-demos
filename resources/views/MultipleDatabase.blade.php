
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
        <h1 class="mb-5">Multiple Database</h1>
      
        <hr>
        <div class="row mt-5">
            <div class="col-md-6">
                <h3>Database 1</h3>
                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Email </th>
                           
    
                        </tr>
                    </thead>
                    <tbody>
                        @php
                       
                            $i = 0;
                        @endphp
    
                        @foreach ($db1 as $list)
                            @php
                            
                                $i++;
                            @endphp
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->email }}</td>
                            </tr>
                        @endforeach
    
    
                    </tbody>
                </table>
            </div>
            <div class="col-md-6">
                <h3>Database 2</h3>
                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Age </th>
                           
    
                        </tr>
                    </thead>
                    <tbody>
                        @php
                       
                            $i = 0;
                        @endphp
    
                        @foreach ($db2 as $list)
                            @php
                            
                                $i++;
                            @endphp
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $list->name }}</td>
                                <td>{{ $list->age }}</td>
                            </tr>
                        @endforeach
    
    
                    </tbody>
                </table>
               
            </div>
        </div>
    </div>
</body>

</html>
