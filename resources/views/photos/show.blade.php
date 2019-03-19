<h1>photos.show</h1>
<p> individual photos</p>
<br/ > {{ $photos->id }}
<br/ > <img src="/storage/1552561211/{{ $photos->src }}"/>
<br/ > {{ $photos->title }}
<br/ > {{ $photos->descr }}

<button><a href="/photos/{{$photos->id}}/edit">edit</a></button>
<form class="form-insert" action="/photos/{{ $photos->id }}" method="POST">
    @method('DELETE')            
    @csrf
    <button type="submit" value="delete">delete</button>
</form>
