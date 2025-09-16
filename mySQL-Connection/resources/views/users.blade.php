<h1>users details</h1>
<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>age</td>
        <td>cast</td>
    </tr>
    @foreach($users as $user)
    <tr>
        <td>{{ $user->id }}</td>
        <td>{{ $user->name }}</td>
        <td>{{ $user->age }}</td>
        <td>{{ $user->cast }}</td>
    </tr>    
    @endforeach
</table>
