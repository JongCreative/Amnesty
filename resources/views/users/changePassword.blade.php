@extends('layouts.app')

@section('content')
  <div class="card-header">REGISTER</div>
  
  <form method="POST" action="/dashboard/password">
    @csrf
    @method('PATCH')

    @if (session('error')) 
        <div class="">
            {{ session('error') }}
        </div>
     @endif
    
    <label>Current Password</label>
    <input type="password" name="currentPassword" required />
        
    <label>New Password</label>
    <input type="password" name="newPassword" required />

    <label>Confirm New Password</label>
    <input type="password" name="newPassword_confirmation" required />

    <button type="submit" class="">Change Password</button>
    <a href="/dashboard" class="button?"> Back </a>
  </form>
@endsection
