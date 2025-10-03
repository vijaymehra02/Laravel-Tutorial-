<h1>upload image here</h1>

<form action="upload" method="post" enctype="multipart/form-data">
    @csrf
    <input type="file" name="file">
    <button>upload</button>
</form>

<br/>
<br/>
<a href="images">all images</a>