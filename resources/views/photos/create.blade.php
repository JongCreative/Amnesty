<h1>photos.create</h1>
    <p> upload photos</p>

<form class="form-insert" action="/photos" enctype="multipart/form-data" method="POST">
    @csrf
        <br /><input type="text" name="title" placeholder="title" value="{{ old('title') }}">
        <br /><input type="text" name="descr" placeholder="descr" value="{{ old('descr') }}">
        <br /><input type="file" name="src" placeholder="src" value="{{ old('src') }}">
        <br /><input type="text" name="focal" placeholder="focal" value="{{ old('focal') }}">
        <br /><input type="text" name="aperture" placeholder="aperture" value="{{ old('aperture') }}">

        <hr /><input type="reset" name="reset">
        <input type="submit">
        <a href="/photos"> cancel </a>
</form>