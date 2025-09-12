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
        <input placeholder="enter your highr egucation" name="useregucation" type="text">
    </div>
    <div class="input-wrapper">
        <p>your skills</p>
        <input type="checkbox" name="skill" value="php" id="checkphp">
        <label for="checkphp">PHP</label>
        <input type="checkbox" name="skill" value="node" id="checknode">
        <label for="checkphp">node</label>
        <input type="checkbox" name="skill" value="java" id="checkjava">
        <label for="checkphp">java</label>
    </div>
    <div class="input-wrapper">
        <p>gender</p>
        <input type="radio" name="gender" value="male" id="gender1">
        <label for="gender1">mail</label>
        <input type="radio" name="gender" value="femail" id="gender2">
        <label for="gender2">femail</label>
    </div>
    <div class="input-wrapper">
        <p>select city</p>
         <select name="city">
            <option value="jbp">jabalpur</option>
            <option value="bpl">bhopal</option>
            <option value="idr">indore</option>
            <option value="nsp">narsingpur</option>
         </select>
    </div>
    <div class="input-wrapper">
        <p>fluency in english</p>
         <input type="range" min="0" max="10" name="eng" >
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