<h1>all students details</h1>

<p> {{ $students }} </p>
<form action="search" method="get">
  <input type="text" placeholder="search by name" name="searchval" value="{{ @$search }}">
  <button>search</button>
</form>
<table border="1">
    <header>
        <th>Name</th>
        <th>email</th>
        <th>phone no</th>
        <th>operations</th>
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
          <td>
             <a href="{{ 'delete/'.$student->id  }} ">Delete</a>
             <a href="{{ 'edit/'.$student->id }}" > Edit</a>
          </td>
    </tbody>
    @endforeach
</table>
{{ $students->links() }}
<style>
  .w-5{
    width: 37px;
    height: 12px;
  }
</style>