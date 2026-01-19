<h1>login first</h1>

<div>
    <form action="login" method="post">

    @csrf 

    <input type="text" name="name" placeholder="enter your name">
    <br/>
    <br/>
    <input type="password" name="password" placeholder="enter your password">
    <br/>
    <br/>
     <button>login</button>
       
    </form>
</div>