<h2>user form</h2>

<form action="adduser" method="post" >
    @csrf
    <div class="input-wrapper">
        <input placeholder="enter user name" name="username" type="text">
    </div>
    <div class="input-wrapper">
        <input placeholder="enter user email" name="useremail" type="text">
    </div>
    <div class="input-wrapper">
        <input placeholder="enter user city" name="usercity" type="text">
    </div>
    <div class="input-wrapper">
        <button>Add new user</button>
    </div>
</form>

<style>
    input{
        border: 2px solid black;
        padding: 10px;
    }
    
    button{
            border: 2px solid black;
            padding: 10px;
            
    }
    .input-wrapper{
        margin: 10px;
    }
</style>