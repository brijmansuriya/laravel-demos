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
    @include('layout.header')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1>Wel-come {{ $name }}</h1>
                <hr>
                <h2>Arth Metic Operations</h2>
                <p>{{ 5 + 5 }}</p>
                <p>{{ 5 - 2 }}</p>
                <p>{{ 5 * 5 }}</p>
                <p>{{ 500 / 10 }}</p>
                <p>COUNT Function : {{ count($users) }}</p>
            </div>
            <div class="col-sm-12 mt-5">
                <h2>Condition</h2>
                <hr>
                {{-- if condition --}}
                @if ($name == 'Blade')
                    <p>Username Is Available use if </p>
                @endif

                {{-- elseif condition --}}
                @if ($name == 'name')
                    <p>Username Is Available use if </p>
                @elseif($name=='Blade')
                    <p>Username Is Available {{ $name }}</p>
                @endif

                {{-- if-else condition --}}
                @if ($name == 'name')
                    <p>Username Is Available use if </p>
                @else
                    <p>else Part</p>
                @endif



            </div>
            <div class="col-sm-12 mt-5">
                <h2>Loops</h2>
                <hr>


                @foreach ($data as $item)
                    <li>{{ $item }}</li>
                @endforeach

                @for ($i = 0; $i < 11; $i++)
                    The current value is {{ $i }} <br>
                @endfor



            </div>

            <div class="col-sm-12 mt-5">
                <h2>script</h2>
                <hr>
                <script>
                    var jsdata = @JSON($data);
                    document.write(jsdata);
                </script>
            </div>
        </div>
    </div>
    @include('layout.footer')

</body>

</html>
