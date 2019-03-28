@extends('layouts.dev')

@section('content')
<div class="forms_container">
    <div class="form_container">
        <div class="header">{{ $sponsor->name }}</div>


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
            <div>
                <a href="/sponsors/{{ $sponsor->id }}/edit">Edit sponsor</a>

                <form method="POST" action="/sponsors/{{$sponsor->id}}">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="DELETE SPONSOR">
                </form>
            </div>
            @endif
        </div>
    </div>

</div>

@endsection
