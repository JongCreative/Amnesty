@extends('layouts.app')

@section('pagetitle', 'All photos')

@section('content')
<article class="content_container flex_column">
    <div class="content_positioning">
        <article class="content_wrapper">
            {{-- Success Handlers for User changes --}}
            @include('inc.messages')
        </article>
        <article class="content_wrapper">
            <a class="button button_act" href="/photos/create">join the contest</a>
        </article>
        {{-- <article class="content_wrapper">
            <div class="content_container">
                <div class="content_top">
                    <div class="left">Enkele foto's</div>
                    <div class="right">Series</div>
                </div>     
            </div>
        </article> --}}
    </div>
    <div class="content_positioning cards_container">
    @foreach($photos as $photo)
        <article class="content_wrapper flex_column card_wrapper">
            <section class="content_sub_wrapper">
                <p class="h1">{{ $photo->title }}</p>
            </section>
            <section class="content_sub_wrapper">
                <div><a href="/photos/{{ $photo->id }}"><img class="img_size" src="/storage/{{ $photo->src }}"/></a></div>
                <div>{!! nl2br(e( $photo->descr))!!}</div>
            </section>
        </article>
    @endforeach
    </div>
    <div class="content_positioning">
        <article class="content_wrapper flex_row">
            {{ $photos->links() }}
        </article>
    </div>
</article>
@endsection

{{-- <div class="content_container">
        <div class="content_top">
            <div class="left">Enkele foto's</div>
            <div class="right">Series</div>
        </div>     
    </div>
    <div class="grid_left">
        <div class="item_card">
            <img src="{{url('/img/devlucht.jpg')}}" alt="">
            <div class="item_title">Dit is een mooie foto</div>
            <div class="item_creator">Pietje Puk</div>
        </div>
        <div class="item_card">
            <img src="{{url('/img/devlucht.jpg')}}" alt="">
            <div class="item_title">Dit is een mooie foto</div>
            <div class="item_creator">Pietje Puk</div>
        </div>
        <div class="item_card">
            <img src="{{url('/img/devlucht.jpg')}}" alt="">
            <div class="item_title">Dit is een mooie foto</div>
            <div class="item_creator">Pietje Puk</div>
        </div>
        <div class="item_card">
            <img src="{{url('/img/devlucht.jpg')}}" alt="">
            <div class="item_title">Dit is een mooie foto</div>
            <div class="item_creator">Pietje Puk</div>
        </div>
        <div class="item_card">
            <img src="{{url('/img/devlucht.jpg')}}" alt="">
            <div class="item_title">Dit is een mooie foto</div>
            <div class="item_creator">Pietje Puk</div>
        </div>
    </div> --}}