@extends('layouts.dev')

@section('content')

<div class="forms_container">
    <div class="form_container">
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
            <label for="contribution">Contribution</label>
            <textarea name="contribution" placeholder="Contribution" maxlength="500">{{ $sponsor->contribution }}</textarea>


            <input type="submit" value="Update Sponsor">
        </form>

    </div>
</div>

@endsection
