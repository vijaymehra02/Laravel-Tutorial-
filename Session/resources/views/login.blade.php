<h1>this is login page</h1>

<div>
    <form action="login" method="POST">
        @csrf
        <input type="text" placeholder="user name" name="username">
        <br/>
        <br/>
        <input type="password" placeholder="password" name="password">
        <br/>
        <br/>
        <button>login</button>
    </form>
</div>