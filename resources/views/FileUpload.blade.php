<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>File Upload</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container mt-5">
        <h1>File Upload</h1>
        <form action="{{ url('FileUploadsub') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label for="fname">Image</label><br>
            <input type="file" id="fname" name="Image"><br><br>
            <input type="submit" class="btn btn-warning" value="Submit">
        </form>
    </div>
</body>

</html>
