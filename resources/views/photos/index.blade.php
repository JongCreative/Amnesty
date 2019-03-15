{{session('success')}}
<h1>photos.index</h1>
<p> all photos</p>

<a href="/photos/create">upload your own photo</a>

<br /><p>

@foreach($photos as $photo)
    {{ $photo->id }}
    <a href="/photos/{{ $photo->id }}"><img src="/storage/1552561211/{{ $photo->src }}"/></a>
    <hr/>
@endforeach
</p>
{{ $photos->links() }}