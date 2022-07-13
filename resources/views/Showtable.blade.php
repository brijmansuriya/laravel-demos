<h1>Data Show</h1>

<table border="1">
    @foreach($users as $user)
    <tr>
     <td>{{ $user->id }}</td>
     <td> {{ $user->name }}</td>
     <td>{{ $user->password }} </td>
   </tr>
 @endforeach
</table>
