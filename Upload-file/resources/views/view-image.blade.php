@if (!empty($path))
    <img src=" {{ url('storage/'.$path)  }} "/>;
@else     
   <h2>image nort found</h2> 
@endif