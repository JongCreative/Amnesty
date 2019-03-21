@extends('layouts.dev')

@section('content')

<div class="forms_container">
    <div class="form_container">
        <div class="header">New Press Article</div>
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
            <label for="date">Publish Date</label>
            <input id="date" type="date" name="date" value="{{ old('date') ? old('date') : $press->date }}">      
            
            <input type="submit" value="Add Press Article">
        </form>

    </div>
</div>

@endsection