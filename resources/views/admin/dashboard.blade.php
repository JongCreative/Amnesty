
@extends('layouts.app')

@section('pagetitle', 'Dashboard')

@section('content')
<article class="content_container flex_column">
    <div class="content_positioning flex_wrap">
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper">
                <p class="header">Welcome {{ Auth::user()->name }}</p>
            </section>

            @include('inc.messages'){{-- Success Handlers for User changes --}}

            <section class="content_sub_wrapper">
                <div><a href="/sponsors/create">Add new Sponsor</a></div>
                <div><a href="/press/create">Add new press article</a></div>
                <div><a href="/users">List users</a></div>
            </section>
            <section class="content_sub_wrapper">
                <div><a href="/admin/contest/edit">change contest data</a></div>
                <div><a href="/admin/contest/create">Start new Contest</a></div>
            </section>
        </article>

        <article class="content_wrapper form_container flex_column">
            <section class="content_sub_wrapper">
                <p class="header">Current contest details</p>
            </section>
            <section class="content_sub_wrapper">
                <div>Contest id: {{ $contestData->contest }}</div>
                <div>Contest region: {{ $contestData->region  }}</div>
                <div>Contest theme: {{ $contestData->theme }}</div>
                <div>Contest end date: {{ $contestData->endDate }}</div>
            </section>
        </article>
    </div>
    <div class="content_positioning">
        <article class="content_wrapper form_container flex_column">
            <section class="content_sub_wrapper">
                <p class="header">prizes</p>
            </section>
            <section class="content_sub_wrapper">
                <div><h3>Main prize: {{ $contestData->mainPrize }}</h3></div>
                <div>{!! nl2br(e($contestData->mainDescr)) !!}</div>
            </section>
        </article>
        <article class="content_wrapper form_container flex_wrap">
            <section class="content_sub_wrapper">
                <div><h4>2nd place prize: {{ $contestData->secondPrize }}</h4></div>
                <div>{!! nl2br(e($contestData->secondDescr)) !!}</div>
            </section>
            <section class="content_sub_wrapper">
                <div><h4>3rd place prize: {{ $contestData->thirdPrize }}</h4></div>
                <div>{!! nl2br(e($contestData->thirdDescr)) !!}</div>
            </section>
        </article>
    </div>
</article>

@endsection
