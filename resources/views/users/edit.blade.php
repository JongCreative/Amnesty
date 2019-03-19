@extends('layouts.app')

@section('content')
<div class="">
    <div class="">Edit {{ $user->name }}</div>

    <form method="POST" action="/users/{{ $user->id }}">
        @csrf
        @method('PATCH')

        <label for="descr" class=""> About me </label>
        <textarea name="descr" placeholder="Description" maxlength="500">{{ $user->descr }}</textarea>


    <button type="submit" class="">Change About Me</button>
    <a href="/users/{{ $user->id }}" class="button?"> Back </a>
  </form>

</div>

@endsection
