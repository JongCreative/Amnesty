@extends('layouts.dev')

@section('content')
<div class="forms_container" style="display: flex; justify-content: center; width: 100%; margin-top: 10px;">
    <div class="form_container" style="max-width: 100%; min-width: 75%">
        <div class="header">Sponsors</div>
        <div style="padding: 20px; background-color: #c7c2ba">

            {{-- Success Handler --}}
            @if (session('success')) 
                <div class="success">
                    {{ session('success') }}
                </div>
             @endif

            {{-- Show all sponsors --}}
            @foreach($sponsors as $sponsor)
                <div style="display: inline-block; margin: 16px;">
                    <a href="sponsors/{{ $sponsor->id }}">
                        <div class="">{{ $sponsor->name }}</div></a>
                        <div class="">{!! nl2br(e($sponsor->contribution)) !!}</div>
                </div>
            @endforeach

            {{ $sponsors->links() }}

        </div>
    </div>
</div>

@endsection