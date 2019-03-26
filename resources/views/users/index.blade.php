@extends('layouts.dev')

@section('content')
<div class="forms_container" style="display: flex; justify-content: center; width: 100%; margin-top: 10px;">
	<div class="form_container" style="max-width: 100%; min-width: 75%">
		<div class="header">Users</div>
		<div style="padding: 20px; background-color: #c7c2ba">

			@foreach($users as $user)
			<a href="users/{{ $user->id }}" style="display: block;">
				<div style="display: inline-block; margin: 8px;">{{ $user->name }}</div>
				<div>{{ $user->title }}</div>
				<div>
					<img src="/img/avatar/{{ $user->avatar }}" alt="{{ $user->name }}'s avatar" />
				</div>
				<div style="display: inline-block; margin: 8px;">{{ $user->email }}</div>
			</a>
			@endforeach

			{{ $users->links() }}
		</div>
	</div>
</div>


@endsection
