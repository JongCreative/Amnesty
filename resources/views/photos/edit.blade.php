<h1>photos.edit</h1>
<p> edit photos</p>

<form class="form-insert" action="/photos/{{$photos->id}}" enctype="multipart/form-data" method="POST">
    @method('PATCH')
    @csrf
        <br /><input type="text" name="title" placeholder="title" value="{{ $photos->title }}">
        <br /><input type="text" name="descr" placeholder="descr" value="{{ $photos->descr }}">
        <br /><input type="text" name="focal" placeholder="focal" value="{{ $photos->focal }}">
        <br /><button type="submit">submit</button>
</form>