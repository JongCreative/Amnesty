@extends('layouts.dev')

@section('content')

<div class="forms_container" style="display: flex; justify-content: center; width: 100%">
    <div class="form_container" style="max-width: 500px;">
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
            <textarea name="descr" placeholder="Description" maxlength="500" style="width: 100%; padding: 12px 20px; margin: 8px 0; display: block; border-radius: 4px; box-sizing: border-box; min-height: 100px; ">{{ Auth::user()->descr }}</textarea>

            <label for="currentPassword" class=""> Password </label>

            <input id="currentPassword" type="password" class="" name="currentPassword" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;">

            <input type="submit" value="Update About Me">
            <a href="/dashboard" class="button?"> Back </a>
        </form>
    </div>
</div>
@endsection
