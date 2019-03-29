@extends('layouts.app')

@section('pagetitle', 'All users page')

@section('content')
<article class="content_container flex_column">
    <div class="content_positioning">
        <article class="content_wrapper">
            {{-- Success Handlers for User changes --}}
            @include('inc.messages')
        </article>
    </div>
    <div class="content_positioning cards_container">
    @foreach($users as $user)
        <article class="content_wrapper flex_column card_wrapper">
			<a href="users/{{ $user->id }}">
				<section class="content_sub_wrapper">
					<p class="h1">{{ $user->name }}</p>
				</section>
				<section class="content_sub_wrapper">
					<div>{{ $user->title }}</div>
					<div><img class="img_size" src="/img/avatar/{{ $user->avatar }}" alt="{{ $user->name }}'s avatar" /></div>
					<div>{{ $user->email }}</div>
				</section>
			</a>
        </article>
    @endforeach
    </div>
    <div class="content_positioning">
        <article class="content_wrapper flex_row">
			{{ $users->links() }}
        </article>
    </div>
</article>
@endsection
