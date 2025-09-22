<div>

    <h1>profile page</h1>
    @if ( session('user') )
    <h2>wellcome {{ session('user') }}</h2>
    <a href="logout">logout</a>
    @else
    <h2>No user found <a href="login">login first</a></h2>
    @endif

</div>
