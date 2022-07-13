

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
    <div class="container ">
      <div class="row">

        <div class="col-md-6 mt-5">
          <form action="{{ url('submit') }}" method="POST">
            @csrf
            <h1>Form</h1>
            <label for="fname"></label>First name<br>
            <input type="text" id="fname" class="form-control" name="fname"><br>
            <label for="lname">Last name:</label><br>
            <input type="text" id="lname"  class="form-control" name="lname"><br><br>
            <input type="submit" class="btn btn-warning" value="Submit">
        </form> 
      </div>
      </div>
       
    </div>
</body>

</html>
