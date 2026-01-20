<h1>upload file laravel</h1>

<div>
    <form action="upload" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" >
        <button>submit file</button>
    </form>
</div>
<div> 
    @if (!empty($path))
    <a href="view-image?path={{ $path }}" > view-image</a>
    @endif
</div>