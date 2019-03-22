@extends('layouts.dev')

@section('content')
<div class="forms_container" style="display: flex; justify-content: center; width: 100%; margin-top: 10px;">
    <div class="form_container" style="max-width: 100%; min-width: 75%">
        <div class="header">{{ $press->title }}</div>
        <div style="padding: 20px; background-color: #c7c2ba">

            {{-- Success Handlers for User changes --}}
            @if (session('success')) 
                <div class="">
                    {{ session('success') }}
                </div>
             @endif

            <div class="">{{ $press->source }}</div>
            <div class="">{{ date('d-m-Y', strtotime($press->date)) }}</div>
            <div class="">https://{{ $press->link }}</div>

            <div style="margin: 8px 0;">
                <a href="/press/{{ $press->id }}/edit">Edit press article</a>

                <form method="POST" action="/press/{{$press->id}}">
                    @csrf
                    @method('DELETE')
                  	<input type="submit" value="DELETE PRESS ARTICLE" style="background: red; color: white; max-width: 300px">
                </form>
            </div>
        </div>
    </div>
    
</div>

@endsection