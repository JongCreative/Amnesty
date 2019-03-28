@extends('layouts.app')

@section('pagetitle', 'Create new contest')

@section('content')
<a href="/admin"> return to admin dashbard </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper">
                <p class="header">Create new contest</p>
            </section>
            <section class="content_sub_wrapper">
                <form  class="form_wrapper form-insert" method="POST" action="/press">
                    @csrf
                    <section>
                        <div>
                            <label for="warning">WARNING, THIS WILL START A NEW CONTEST AND ENDS THE CURRENT ONE. </label>
                        </div>
                        <div>
                            <label>Region<input id="region" type="text" class="" name="region" value="{{ $contestData->region }}" required autofocus></label>
                        </div>
                        <div>
                            <label>Theme<input id="theme" type="text" class="" name="theme" value="{{ $contestData->theme }}" required></label>
                        </div>
                        <div>
                            <label>End Date<input id="endDate" type="date" class="" name="endDate" value="{{ $contestData->endDate }}" required></label>
                        </div>
                    <hr />
                    </section>
                    <section class="flex_row">
                        <input class="button button_act" type="submit">
                    </section>
                    <section>
                        <input type="reset" name="reset">
                        <a href="/admin"> cancel </a>
                    </section>
                </form>
            </section>
        </article>
    </div>
    <div class="content_positioning content_positioning_2-2">
        <article class="content_wrapper">
            <section class="content_sub_wrapper"></section>
        </article>
    </div>
</article>
@endsection