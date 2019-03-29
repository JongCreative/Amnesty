@extends('layouts.dev')

@section('content')

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
            <input type="password" name="currentPassword" required>
                
            <label>New Password</label>
            <input type="password" name="newPassword" required>

            <label>Confirm New Password</label>
            <input type="password" name="newPassword_confirmation" required>

            <input type="submit" value="Change Password">
            <a href="/dashboard" class="button?"> Back </a>
        </form>

    </div>
</div>
@endsection
