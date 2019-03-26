@extends('layouts.dev')

@section('content')

<div class="forms_container" style="display: flex; justify-content: center; width: 100%">
    <div class="form_container" style="max-width: 500px;">
        <div class="header">Edit Press Article</div>
        <form method="POST" action="/press/{{$press->id}}">
            @csrf
            @method('PATCH')

            @if ($errors->has('title'))
            <div class="error">
                {{ $errors->first('title') }}
            </div>
            @endif
            <label for="title">Title</label>
            <input id="title" type="text" name="title" value="{{ old('title') ? old('title') : $press->title }} " autofocus>

            @if ($errors->has('src'))
            <div class="error">
                {{ $errors->first('src') }}
            </div>
            @endif
            <label for="src">Source Name</label>
            <input id="src" type="text" name="src" value="{{ old('src') ? old('src') : $press->source }}">

            @if ($errors->has('link'))
            <div class="error">
                {{ $errors->first('link') }}
            </div>
            @endif
            <label for="link">Link to article</label>
            <input id="link" type="text" name="link" value="{{ old('link') ? old('link') : $press->link }}">

            @if ($errors->has('date'))
            <div class="error">
                {{ $errors->first('date') }}
            </div>
            @endif
            <label for="date" style="display: block;">Publish Date</label>
            <input id="date" type="date" name="date" value="{{ old('date') ? old('date') : $press->date }}">

            <label for="descr" style="display: block;">Description</label>
            <textarea name="descr" placeholder="Description" maxlength="500" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: block; border-radius: 4px; box-sizing: border-box; min-height: 100px; ">{{ $press->descr }}</textarea>

            <input type="submit" value="Update Press Article">
        </form>

    </div>
</div>

@endsection
