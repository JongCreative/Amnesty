@extends('layouts.app')

@section('pagetitle', 'All press articles')

@section('content')
<article class="content_container flex_column">
    <div class="content_positioning">
        <article class="content_wrapper">
            {{-- Success Handlers for User changes --}}
            @include('inc.messages')
        </article>
        @guest
        @else
            @if (Auth::user()->admin)
                <article class="content_wrapper">
                    <a href="/press/create">Add new press article</a>
                </article>
            @endif
        @endguest
    </div>
    <div class="content_positioning cards_container center_content">
    @foreach($press as $pressArticle)
    <article class="content_wrapper flex_column card_wrapper">
        <section class="content_sub_wrapper card_sub_wrapper flex_wrap">
            <div class="flex_1 center_content">
                {{-- <div><img src="/img/logo/{{ $pressArticle->source }}" alt="{{ $pressArticle->source }}'s logo" /></div> --}}
                <div><img src="https://pbs.twimg.com/profile_images/931190512731807746/yO8Lcr9H_400x400.jpg" alt="{{ $pressArticle->source }}'s logo" /></div>
            </div>
            <div class="flex_2 flex_column center_content">
                <p class="h2 center_content">{{ $pressArticle->title }}</p>
                <div >{{ date('d-m-Y', strtotime($pressArticle->date)) }}</div>
                <div class="h3">{!! nl2br(e( $pressArticle->descr))!!}</div>
                <div><a href="{{ $pressArticle->link }}">View article</a></div>

            @guest
            @else
                @if (Auth::user()->admin)              
                    <div><a href="press/{{ $pressArticle->id }}">Show single article</a></div>
                @endif
            @endguest
            </div>
        </section>
        <section class="whitespace"></section>
    </article>
    @endforeach
    </div>
    <div class="content_positioning">
        <article class="content_wrapper flex_row">
            {{ $press->links() }}
        </article>
    </div>
</article>
@endsection
