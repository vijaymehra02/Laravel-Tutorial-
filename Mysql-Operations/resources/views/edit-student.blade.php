<h1>edit student</h1>
<form action="/edit-student/{{ $student->id }}" method="post">
    @csrf
    <input type="hidden" name="_method" value="put">
    <input type="text" name="name" value="{{ $student->name }}" placeholder="enter your name">
    <br/>
    <br/>
    <input type="text" name="email" value="{{ $student->email }}" placeholder="enter your email">
    <br/>
    <br/>
    <input type="text" name="phone" value="{{ $student->phone }}" placeholder="enter your phone no">
    <br/>
    <br/>
    <button>update</button>
    <a href="/list" >cancle</a>
</form>