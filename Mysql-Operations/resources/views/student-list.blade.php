<h1>all students details</h1>

<p> {{ $students }} </p>
<table border="1">
    <header>
        <th>Name</th>
        <th>email</th>
        <th>phone no</th>
    </header>
    @foreach ( $students as $student )
    <tbody>
          <td>
            {{ $student->name }}
          </td>
          <td>
            {{ $student->email }}
          </td>
          <td>
            {{ $student->phone }}
          </td>
    </tbody>
    @endforeach
</table>