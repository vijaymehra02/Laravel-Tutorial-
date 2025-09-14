<h2>user form</h2>

<!-- @if ($errors->any())

@foreach ( $errors->all() as $error)
 <div>
    {{ $error }}
 </div>
@endforeach

@endif -->

<form action="adduser" method="post" >
    @csrf
    <div class="input-wrapper"> 
        <input placeholder="enter user name" name="username" type="text" value="{{old('username')}}"
        class={{ $errors->first('username')?'input-error':'' }}
        >
        <span style="color:red" > @error('username'){{ $message }}@enderror </span>
    </div>
    <div class="input-wrapper">
        <input placeholder="enter user email" name="useremail" type="text" value="{{old('useremail')}}"
        class="{{ $errors->first('useremail')?'input-error':'' }}"
        >
        <span style="color:red" > @error('useremail'){{ $message }}@enderror </span>
    </div>
    <div class="input-wrapper">
        <input placeholder="enter your highr egucation" name="useregucation" type="text" value="{{old('useregucation')}}"
        class="{{ $errors->first('useregucation')?'input-error':'' }}"
        >
        <span style="color:red" > @error('useregucation'){{ $message }}@enderror </span>
    </div>
    <div class="input-wrapper">
        <p>your skills</p>
        <span style="color:red" > @error('skill'){{ $message }}@enderror </span>
        <input type="checkbox" name="skill" value="php" id="checkphp">
        <label for="checkphp">PHP</label>
        <input type="checkbox" name="skill" value="node" id="checknode">
        <label for="checkphp">node</label>
        <input type="checkbox" name="skill" value="java" id="checkjava">
        <label for="checkphp">java</label>
    </div>
    <div class="input-wrapper">
        <p>gender</p>
        <span style="color:red" > @error('gender'){{ $message }}@enderror </span>
        <input type="radio" name="gender" value="male" id="gender1">
        <label for="gender1">mail</label>
        <input type="radio" name="gender" value="femail" id="gender2">
        <label for="gender2">femail</label>
    </div>
    <div class="input-wrapper">
        <p>select city</p>
        <span style="color:red" > @error('city'){{ $message }}@enderror </span>
         <select name="city">
            <option name="city" value="jbp">jabalpur</option>
            <option name="city" value="bpl">bhopal</option>
            <option name="city" value="idr">indore</option>
            <option name="city" value="nsp">narsingpur</option>
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
    .input-error{
        border: 1px solid red;
    }
</style>