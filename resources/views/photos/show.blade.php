

            @extends('layouts.daisy')

@section('content')

<a href="/photos"> return to gallery </a>

<div class="form_container" style="display:flex; flex-direction: row;">
        <article style="display:flex; flex-direction: column; width: 700px">
            <section style="flex: 1;">

<div class="form_container" style="max-width:1000px">
    <div class="header">foto details</div>

    <br /> {{ $photos->title }}
    <br /> {{ $photos->descr }}
    <br /> {{ $photos->focal }}
    <br /> {{ $photos->aperture }}
    <br />

{{--         @if(!Auth::guest())
            @if(Auth::user()->id == $photos->user_id) --}}
                <a class="button button_act" href="/photos/{{$photos->id}}/edit">edit</a>
                <form class="form-insert" action="/photos/{{ $photos->id }}" method="POST">
                    @method('DELETE')            
                    @csrf
                    <button class="button button_act" type="submit" value="delete">delete</button>
                </form>
            </div>

            
            </section>
            </article>
            
            <article>
                <img src="/storage/{{ $photos->src }}" style="width:100%"/>
            </article>
            </div>
            
            
            @endsection

