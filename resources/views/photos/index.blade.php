@extends('layouts.app')

@section('pagetitle', 'Inzendingen')

@section('content')
<div class="content_container">
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
</div>




<p>
@foreach($photos as $photo)
    {{ $photo->title }}
    <a href="/photos/{{ $photo->id }}"><img src="/storage/{{ $photo->src }}" style="max-width:100%"/></a>
    <hr/>
@endforeach
</p>
{{ $photos->links() }}

@endsection

