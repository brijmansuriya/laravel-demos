


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
        <div class="mt-5 mb-5">
            <a href="{{ url('vendors/add') }}" class="float-right btn btn-info btn-sm light fw600 ml10">
              Add </a>
              <div  class="topbar-right mt-5 mb-5">Total Vendors :- {{$Count}}</div>
        </div>

        <?php
        
        
        if (request()->session()->get('error_msg')!=""):
            $msg =  request()->session()->get('error_msg');
            request()->session()->flash('error_msg',"");
            echo '<div class="alert alert-success" role="alert"> '.$msg.'</div>';
        endif;
        if (request()->session()->get('success_msg')!=""):
            $msg =  request()->session()->get('success_msg');
            request()->session()->flash('success_msg',"");
            echo '<div class="alert alert-danger" role="alert"> '.$msg.'</div>';
        endif;
      
    ?>

            <div class="tray tray-center">

                <div class="center-block">

                    <!-- Store Owner Details -->
                    <div class="panel ">
                        {{-- <div class="panel-heading">
                            <span class="panel-title">Owner Details</span>
                        </div> --}}
                        <div class="col-md-12">
                            <div class="panel panel-visible" id="spy2">
                               
                             

                                <table class="table table-striped table-hover" id="datatable2" cellspacing="0" width="100%">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Vendors Name</th>
                                            <th>Email</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php
                                            $i = 0;
                                        @endphp
                                        
                                        @foreach ($vendorsdata as $list)
                                            @php
                                                $i++;
                                            @endphp
                                            <tr>
                                                <td>{{ $i }}</td>
                                                <td>{{ $list->name }}</td>
                                                <td>{{ $list->email }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <a href="{{ url('vendors/add/') }}/{{ $list->id }}"
                                                            class="btn btn-warning btn-xs">
                                                            Edit
                                                        </a>
                                                    </div>
                                                    <div class="btn-group">
                                                        <a href="vendors/delete/{{ $list->id }}" >
                                                             <button type="button" class="btn btn-danger btn-xs">Delete
                                                            </button>
                                                        </a>
                                                    </div>
                                                </td>
                                            </tr>
                                        @endforeach


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>


        
</body>
    
</html>




