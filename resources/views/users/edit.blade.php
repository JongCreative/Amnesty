@extends('layouts.app')

@section('content')
<div class="">
    <div class="">Edit {{ $user->name }}</div>

    <form method="POST" action="/users/{{ $user->id }}">
        @csrf
        @method('PATCH')

        <label for="descr" class=""> About me </label>
        <textarea name="descr" placeholder="Description" maxlength="500">{{ $user->descr }}</textarea>

        <label for="Ranks" class=""> Ranks </label>
        <input type="checkbox" name="jury" {{
            $user->jury ? ' checked="checked" ' : '' }}>
        <label for="jury" class=""> Jury </label>

        <input type="checkbox" name="admin" {{
            $user->admin ? ' checked="checked" ' : '' }} >
        <label for="admin" class=""> Admin </label>
        

    <button type="submit" class="">Change About Me</button>
    <a href="/users/{{ $user->id }}" class="button?"> Back </a>
  </form>

</div>

@endsection
