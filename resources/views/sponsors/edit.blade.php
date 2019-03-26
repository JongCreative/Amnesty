@extends('layouts.dev')

@section('content')

<div class="forms_container" style="display: flex; justify-content: center; width: 100%">
    <div class="form_container" style="max-width: 500px;">
        <div class="header">Edit Sponsor</div>
        <form enctype="multipart/form-data" method="POST" action="/sponsors/{{$sponsor->id}}">
            @csrf
            @method('PATCH')

            @if ($errors->has('name'))
            <div class="error">
                {{ $errors->first('name') }}
            </div>
            @endif

            <label for="name">Name</label>
            <input id="name" type="text" name="name" value="{{ old('name') ? old('name') : $sponsor->name }}" autofocus>

<label for="title">Title</label>
<input id="title" type="text" name="title" value="{{ old('title') ? old('title') : $sponsor->title }}">

@if ($errors->has('logo'))
<div class="error">
    {{ $errors->first('logo') }}
</div>
@endif
<label>Update Logo:</label>
<input type="file" name="logo">


            @if ($errors->has('contribution'))
            <div class="error">
                {{ $errors->first('contribution') }}
            </div>
            @endif
            <label for="contribution" style="display: block;">Contribution</label>
            <textarea name="contribution" placeholder="Contribution" maxlength="500" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: block; border-radius: 4px; box-sizing: border-box; min-height: 100px; ">{{ $sponsor->contribution }}</textarea>


            <input type="submit" value="Update Sponsor">
        </form>

    </div>
</div>

@endsection
