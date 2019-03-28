@extends('layouts.app')

@section('content')

<a href="/photos"> return to gallery </a>

<div>
    <article>
        <section>
            <p class="header">foto details</p>
        </section>
        <section>
            <br /> {{ $photos->title }}
            <br /> {{ $photos->descr }}
            <br /> {{ $photos->focal }}
            <br /> {{ $photos->aperture }}
            <br />
        </section>
        <section>
            @if(!Auth::guest())
                @if(Auth::user()->id == $photos->user_id)
                    <a class="button button_act" href="/photos/{{$photos->id}}/edit">edit</a>
                    <form class="form-insert" action="/photos/{{ $photos->id }}" method="POST">
                        @method('DELETE')            
                        @csrf
                        <button class="button button_act" type="submit" value="delete">delete</button>
                    </form>
                @endif
            @endif
        </section>
    </article>
    <article>
        <img src="/storage/{{ $photos->src }}" />
    </article>
</div>

@endsection