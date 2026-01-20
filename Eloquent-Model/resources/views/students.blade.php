<h1>students data</h1>
<p>{{ $data }}</p>

<table border="1">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>roll no</td>
        <td>branch</td>
    </tr>
    @foreach($data as $data)
    <tr>
        <td>{{ $data->id }}</td>
        <td>{{ $data->name }}</td>
        <td>{{ $data->rollno }}</td>
        <td>{{ $data->branch	 }}</td>
    </tr>    
    @endforeach