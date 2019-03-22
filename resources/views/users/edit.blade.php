@extends('layouts.dev')

@section('content')

<div class="forms_container" style="display: flex; justify-content: center; width: 100%">
    <div class="form_container" style="max-width: 500px;">
        <div class="header">Edit {{ $user->name }}</div>  

        <form method="POST" action="/users/{{ $user->id }}">
            @csrf
            @method('PATCH')

            <label for="descr" class=""> About {{$user->name}} </label>
            <textarea name="descr" placeholder="Description" maxlength="500" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: block; border-radius: 4px; box-sizing: border-box; min-height: 100px; ">{{ $user->descr }}</textarea>

            <label for="Ranks" style="display: block;"> Ranks </label>
            <input type="checkbox" name="jury" {{
                $user->jury ? ' checked="checked" ' : '' }}>
            <label for="jury" class=""> Jury </label>

            <input type="checkbox" name="admin" {{
                $user->admin ? ' checked="checked" ' : '' }} >
            <label for="admin" class=""> Admin </label>

            <input type="checkbox" name="banned" {{
                $user->banned ? ' checked="checked" ' : '' }} >
            <label for="banned" class=""> Banned </label>
            

            <input type="submit" value="Update {{$user->name}}">
            <a href="/users/{{ $user->id }}" class="button?"> Back </a>
        </form>

    </div>
</div>

@endsection
