@extends('layouts.app')

@section('pagetitle', 'Sponsor details')

@section('content')

<article class="content_container flex_column">
    <div class="content_positioning">
        <article class="content_wrapper">
            {{-- Success Handlers for User changes --}}
    @include('inc.messages')
        </article>

        @guest @else @if (Auth::user()->admin)
        <article class="content_wrapper">
            <a href="/press/create">Add new press article</a>
        </article>
        @endif @endguest
    </div>
    <div class="grid_container">
        @foreach($sponsors as $sponsor)
        <article class="sponsor_card">
            <img class="cover" src="/img/logo/{{ $sponsor->logo }}" alt="{{ $sponsor->name }}'s logo">
            <div class="card_name">{{ $sponsor->name }}</div>
            <div class="card_title">{{ $sponsor->title }}</div>
            <div class="card_description">{!! nl2br(e($sponsor->contribution)) !!}</div>

            @guest @else @if (Auth::user()->admin)
            <div><a href="sponsors/{{ $sponsor->id }}">Show single sponsor</a></div>
            @endif @endguest

        </article>
        @endforeach
    </div>

    <div class="content_positioning">
        <article class="content_wrapper flex_row">
            {{ $sponsors->links() }}
        </article>
    </div>
</article>
@endsection