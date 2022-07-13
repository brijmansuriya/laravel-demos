@include('templet')


<p> Templet 2 </p>



@for ($i = 0; $i < 11; $i++)
    The current value is {{ $i }} <br>
@endfor


@foreach ($data as $item)
    <li>{{ $item }}</li>
@endforeach


<script>
    var jsdata= @JSON($data);
    document.write(jsdata);
</script>