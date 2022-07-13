@php

$save = url('vendors/save');
$page = 'vendors';

$val_email = '';

$val_name = '';
$val_id = '';
$addedit = 'Add';

if ($id != '') {
    $val_email = $data->email;
    $val_name = $data->name;
    $val_id = $data->id;
    $addedit = 'Edit';
}

@endphp


  
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
      
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
            crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous">
        </script>
    </head>
    
    <body>
        <div class="container ">
            <h1> Vendors Add/Edit Page</h1>
           
            <!-- begin: .tray-center -->
            <div class="tray tray-center">
                <form role="form" action="{{ $save }}" method="POST">
                    @csrf
                    @if ($errors->any())
                        @foreach ($errors->all() as $error)
                            <li class="alert alert-danger">{{ $error }}</li>
                        @endforeach
                    @endif
                    <!-- Input Fields -->
                    <div class="panel">
                       
                        <div class="panel-body">
                            <input type="hidden" name='id' value='{{ $val_id }}'>

                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold">Name</label>
                                    <input type="text" name="name" value="{{ $val_name }}" id="name"
                                        placeholder="Enter Name " class="form-control">
                                </fieldset>
                            </div>

                            <div class="col-md-6">
                                <fieldset class="form-group">
                                    <label class="form-label semibold">Email</label>
                                    <input type="Email" name="email" value="{{ $val_email }}" id="Email"
                                        placeholder="Enter Email" class="form-control">
                                </fieldset>
                            </div>
                            
                        </div>
                        <div class="panel-footer">
                            <input type="submit" value="Save" class="btn btn-primary btn-sm">
                            <a class="btn btn-danger btn-sm" href="javascript:history.back()">Cancel</a>
                        </div>
                    </div>
                </form>
            </div>
            <!-- end: .tray-center -->

        </div>
          
    </body>
    
    </html>
    