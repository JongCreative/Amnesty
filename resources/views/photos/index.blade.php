<h1>photos.index</h1>
<p> all photos</p>

@foreach($photos as $photo)
    {{$photo->id}}
    <hr/>
@endforeach