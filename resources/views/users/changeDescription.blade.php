@extends('layouts.app')

@section('pagetitle', 'Change About me')

@section('content')
<a href="/dashboard"> return to dashboard </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container flex_column">
            <section class="content_sub_wrapper">
                <div class="h1">Change About me</div>
            </section>
            <section class="content_sub_wrapper">
                <form class="form_wrapper form-insert" method="POST" action="/dashboard/description">
                    @csrf
                    @method('PATCH')
                    <section>
                        {{-- Success Handlers for User changes --}}
                        @include('inc.messages')
                    </section>
                    <section>
                        <label>About me<textarea name="descr" placeholder="Description" maxlength="500">{{ Auth::user()->descr }}</textarea></label>
                        <label>Password<input id="currentPassword" type="password" class="" name="currentPassword" required></label>
                    </section>
                    <section>
                        <input class="btn" type="reset" name="reset">
                        <input type="submit" value="Update About Me">
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

