<h1>photos.show</h1>
<p> individual photos</p>
<br/ > {{ $photos->id }}
<br/ > {{ $photos->src }}
<br/ > {{ $photos->title }}
<br/ > {{ $photos->descr }}

<form class="form-insert" action="/photos/{{ $photos->id }}" method="POST">
    @method('DELETE')            
    @csrf
    <button type="submit" value="delete">delete</button>
</form>
