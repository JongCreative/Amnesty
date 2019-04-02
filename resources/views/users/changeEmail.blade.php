@extends('layouts.app')

@section('pagetitle', 'Update user details')

@section('content')
<a href="/dashboard"> return to dashboard </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container flex_column">
            <section class="content_sub_wrapper">
                <div class="h1">Change email</div>
            </section>
            <section class="content_sub_wrapper">
                <form class="form_wrapper form-insert" enctype="multipart/form-data" method="POST" action="/dashboard/email">
                    @csrf
                    @method('PATCH')
                    <section>
                        <div><label>Current email: {{ Auth::user()->email }} </label></div>
                        <div><label>email<input id="email" type="email" name="email" value="{{ old('email') }}" required ></label></div>
                        @if ($errors->has('email'))
                        <div class="alert alert-danger" role="alert">
                            {{ $errors->first('email') }}
                        </div>
                        @endif
                        <div><label>Password<input id="currentPassword" type="password" name="currentPassword" required></label></div>            
                        <hr />
                    </section>
                    <section class="content_sub_wrapper">
                        {{-- Success Handlers for User changes --}}
                        @include('inc.messages')
                        <input class="button button_act" type="submit" value="Change email">
                    </section>
                    <section>
                        <input class="btn" type="reset" name="reset">
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
