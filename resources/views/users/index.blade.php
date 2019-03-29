@extends('layouts.dev')

@section('content')
<div>
	<div>
		<div class="h1">Users</div>
		<div>

			@foreach($users as $user)
			<a href="users/{{ $user->id }}" style="">
				<div>{{ $user->name }}</div>
				<div>{{ $user->title }}</div>
				<div><img src="/img/avatar/{{ $user->avatar }}" alt="{{ $user->name }}'s avatar" /></div>
				<div>{{ $user->email }}</div>
			</a>
			@endforeach

			{{ $users->links() }}
		</div>
	</div>
</div>


@endsection