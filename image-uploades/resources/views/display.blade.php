<h1>list of all images are here</h1>

<a href="uploadform" >upload more</a>
 
<div>
    @foreach ($images as $image )
    <img style="width:250px" src="{{ url('storage/'.$image->path) }}" />
    @endforeach
</div>
