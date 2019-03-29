@extends('layouts.app')

@section('pagetitle', 'Update contest details')

@section('content')
<a href="/admin"> return to dashboard </a>
<article class="content_container">
  <div class="content_positioning content_positioning_1-2">
    <article class="content_wrapper form_container flex_column">
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
              <label>End Date<input id="endDate" type="date" class="" name="endDate" value="{{ $contestData->end }}" required></label>
            </div>

            <div>
              <label>Main Prize<input id="mainPrize" type="text" class="" name="mainPrize" value="{{ $contestData->mainPrize }}" required></label>
            </div>
            <div>
              <label>Description<textarea name="mainDescr">{{ $contestData->mainDescr }}</textarea></label>
            </div>
            <div>
              <label for="secondPrize" class="">2nd Place prize</label>
              <input id="secondPrize" type="text" class="" name="secondPrize" value="{{ $contestData->secondPrize }}" required>
            </div>
            <div>
              <textarea name="secondDescr">{{ $contestData->secondDescr }}</textarea>
            </div>
            <div>
              <label for="thirdPrize" class="">3rd Place prize</label>
              <input id="thirdPrize" type="text" class="" name="thirdPrize" value="{{ $contestData->thirdPrize }}" required>
            </div>
            <div>
              <textarea name="thirdDescr">{{ $contestData->thirdDescr }}</textarea>

              <label for="monthPrize" class="">Month prize</label>
              <input id="monthPrize" type="text" class="" name="monthPrize" value="{{ $contestData->monthPrize }}" required>
            </div>
            <div>
              <textarea name="monthDescr">{{ $contestData->monthDescr }}</textarea>
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
