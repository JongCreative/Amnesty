@extends('layouts.dev')

@section('content')

<div class="forms_container" style="display: flex; justify-content: center; width: 100%">
    <div class="form_container" style="max-width: 500px;">
        <div class="header">Change password</div>  
  
        <form method="POST" action="/dashboard/password">
            @csrf
            @method('PATCH')

            @if (session('error')) 
                <div class="">
                    {{ session('error') }}
                </div>
             @endif
            
            <label>Current Password</label>
            <input type="password" name="currentPassword" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"/>
                
            <label>New Password</label>
            <input type="password" name="newPassword" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"/>

            <label>Confirm New Password</label>
            <input type="password" name="newPassword_confirmation" required style="width: 100%; padding: 12px 20px; margin: 8px 0; display: inline-block; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;"/>

            <input type="submit" value="Change Password">
            <a href="/dashboard" class="button?"> Back </a>
        </form>

    </div>
</div>
@endsection
