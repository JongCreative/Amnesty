@extends('layouts.dev')

@section('content')
<div class="forms_container" style="display: flex; justify-content: center; width: 100%; margin-top: 10px;">
    <div class="form_container" style="max-width: 100%; min-width: 75%">
        <div class="header">{{ $sponsor->name }}</div>
        <div style="padding: 20px; background-color: #c7c2ba">

            {{-- Success Handlers for User changes --}}
            @if (session('success'))
            <div class="">
                {{ session('success') }}
            </div>
            @endif
            <div class=""><img src="/img/logo/{{ $sponsor->logo }}" alt="{{ $sponsor->name }}'s logo" /></div>
            <div>{{ $sponsor->title }}</div>
            <div class="">{!! nl2br(e($sponsor->contribution)) !!}</div>

            @if (Auth::user()->admin)
            <div style="margin: 8px 0;">
                <a href="/sponsors/{{ $sponsor->id }}/edit">Edit sponsor</a>

                <form method="POST" action="/sponsors/{{$sponsor->id}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE SPONSOR" style="background: red; color: white; max-width: 300px">
                </form>
            </div>
            @endif
        </div>
    </div>

</div>

@endsection
