@extends('layouts.app')

@section('pagetitle', 'Change password')

@section('content')
<a href="/dashboard"> return to dashboard </a>
<article class="content_container">
    <div class="content_positioning content_positioning_1-2">
        <article class="content_wrapper form_container flex_column">
            <section class="content_sub_wrapper">
                <div class="h1">Change About me</div>
            </section>
            <section class="content_sub_wrapper">
                <form class="form_wrapper form-insert" method="POST" action="/dashboard/password">
                    @csrf
                    @method('PATCH')
                    <section>
                        {{-- Success Handlers for User changes --}}
                        @include('inc.messages')
                    </section>
                    <section>
                        <div><label>Current Password<input type="password" name="currentPassword" required></label></div>
                        <div><label>New Password<input type="password" name="newPassword" required></label></div>
                        <div><label>Confirm New Password<input type="password" name="newPassword_confirmation" required></label></div>
                    </section>
                    <section class="flex_row">
                        <input class="button button_act" type="reset" name="reset">
                        <input class="button button_act" type="submit" value="Change Password">
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

