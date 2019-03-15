<h1>photos.index</h1>
<p> all photos</p>

@foreach($photos as $photo)
    <a href="/photos/{{ $photo->id }}">{{ $photo->src }}</a>
    <hr/>
@endforeach
{{ $photos->links() }}