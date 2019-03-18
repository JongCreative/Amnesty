<h1>photos.edit</h1>
<p> edit photos</p>

<form class="form-insert" action="/photos/ {{$photos->id}} " enctype="multipart/form-data" method="POST">
    @method('PATCH')
    @csrf
        <input type="submit">
</form>