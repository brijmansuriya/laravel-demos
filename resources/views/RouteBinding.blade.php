<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Route Binding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="text-center container">
        <h1 class="mb-5">Route Binding</h1>
      
        <hr>
        <div class="row mt-5">
            <div class="col-md-6">
                <table class="table table-striped table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Amount </th>
    
                        </tr>
                    </thead>
                    <tbody>
                            <tr>
                                <?php  $area = json_decode($key, true) ?>
                                <td> {{ $area['name'] }}</td>
                                <td> {{ $area['amount'] }}</td>
                            </tr>
                    </tbody>
                </table>
            </div>
           
        </div>
    </div>
</body>

</html>
