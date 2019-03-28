@extends('layouts.app')

@section('pagetitle', 'Sponsor details')

@section('content')

{{-- Success Handlers for User changes --}}
@include('inc.messages')
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper">
                <p class="h1">{{ $sponsor->name }}</p>
            </section>
            <section class="content_sub_wrapper">
                <div><img src="/img/logo/{{ $sponsor->logo }}" alt="{{ $sponsor->name }}'s logo" /></div>
                <div>{{ $sponsor->title }}</div>
                <div>{!! nl2br(e($sponsor->contribution)) !!}</div>
            </section>
        </article>
        <article class="content_wrapper flex_row">
            @if (Auth::user()->admin)
            <section class="content_sub_wrapper">
                <a class="button button_act" href="/sponsors/{{ $sponsor->id }}/edit">Edit sponsor details</a>
            </section>
            <section class="content_sub_wrapper">
                <form method="POST" action="/sponsors/{{$sponsor->id}}">
                    @csrf
                    @method('DELETE')
                    <input class="button btn_delete" type="submit" value="DELETE SPONSOR">
                </form>
            </section>
            @endif
        </article>
    </div>
    <div class="content_positioning content_positioning_2-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper"></section>
        </article>
    </div>
</article>
@endsection