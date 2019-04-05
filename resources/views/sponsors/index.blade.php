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
    <div class="content_positioning cards_container">
    @foreach($sponsors as $sponsor)
        <article class="content_wrapper flex_column card_wrapper">
            <section class="content_sub_wrapper card_sub_wrapper flex_wrap">
                <div class="flex_1">
                    <img src="/img/logo/{{ $sponsor->logo }}" alt="{{ $sponsor->name }}'s logo" />
                </div>
                <div class="flex_2">
                    <p class="h2">{{ $sponsor->name }}</p>
                    <div class="h3">{!! nl2br(e($sponsor->contribution)) !!}</div>
                    <div>{{ $sponsor->title }}</div>

                    @guest @else @if (Auth::user()->admin)
                    <div><a href="sponsors/{{ $sponsor->id }}">Show single sponsor</a></div>
                    @endif @endguest
                </div>
            </section>
        </article>
    @endforeach

    <div class="content_positioning">
        <article class="content_wrapper flex_row">
        {{ $sponsors->links() }}
        </article>
    </div>
</article>
@endsection