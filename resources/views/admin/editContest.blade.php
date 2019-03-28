@extends('layouts.app')

@section('pagetitle', 'Update contest details')

@section('content')
<a href="/admin"> return to dashboard </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container">
            <section class="content_sub_wrapper">
                <p class="header">Edit contest</p>
            </section>
            <section class="content_sub_wrapper">
                <form class="form_wrapper form-insert" method="POST" action="/admin/contest">
                    @csrf
                    @method('PATCH')
                    <section>
                        <div>
                            <label class="label_contest_id">Contest id: {{ $contestData->contest }}</label>
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
                        <div>
                            <label>Main Prize<input id="mainPrize" type="text" class="" name="mainPrize" value="{{ $contestData->mainPrize }}" required></label>
                        </div>
                        <div>
                            <label>Description<textarea name="mainDescr">{{ $contestData->mainDescr }}</textarea></label>
                        </div>
                    <hr />
                    </section>
                    <section class="flex_row">
                        <input class="button button_act" type="submit" value="Edit Contest Data">
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