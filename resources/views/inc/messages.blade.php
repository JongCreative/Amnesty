@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
        <article class="alert alert-danger" style=" background-color:tomato ; color:white">
            {{$error}}
        </article>
    @endforeach
@endif

    @if (session('success'))
        <article class="alert alert-success" style=" background-color:teal ; color:white">
            {{session('success')}}
        </article>
    @endif

    @if (session('error'))
        <article class="alert alert-danger" style=" background-color:tomato ; color:white">
            {{session('error')}}
        </article>
    @endif
