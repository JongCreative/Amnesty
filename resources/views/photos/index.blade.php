@extends('layouts.app')

@section('pagetitle', 'All photos')

@section('content')
            <article class="content_wrapper">
                {{-- Success Handlers for User changes --}}
                @include('inc.messages')
            </article>
            <article class="content_wrapper">
                <a class="button button_act" href="/photos/create">join the contest</a>
            </article>
        <div class="grid_container">
            @foreach($photos as $photo)
            <article class="gallery_card">
                    <a href="/photos/{{ $photo->id }}"><img class="cover" src="/storage/{{ $photo->src }}"/></a>
                    <div class="card_phototitle">{{ $photo->title }}</div>
                    <div class="card_creator">naam {!! nl2br(e( $photo->descr))!!}</div>
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