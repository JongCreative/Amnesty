@extends('layouts.dev')

@section('content')

<div class="forms_container">
    <div class="form_container">
        <div class="header">Change About me</div>  
  
        <form method="POST" action="/dashboard/description">
            @csrf
            @method('PATCH')

            @if (session('error')) 
                <div class="">
                    {{ session('error') }}
                </div>
            @endif
              
            <label for="descr" class=""> About me </label>
            <textarea name="descr" placeholder="Description" maxlength="500">{{ Auth::user()->descr }}</textarea>

            <label for="currentPassword" class=""> Password </label>

            <input id="currentPassword" type="password" class="" name="currentPassword" required>

            <input type="submit" value="Update About Me">
            <a href="/dashboard" class="button?"> Back </a>
        </form>
    </div>
</div>
@endsection
