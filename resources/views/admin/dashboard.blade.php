@extends('layouts.dev')

@section('content')
<div class="forms_container">
    <div class="form_container">
        <div class="header">Dashboard</div>
        <div>
            <div>
                Welcome {{ Auth::user()->name }}
            </div>

            {{-- Success Handler --}}
            @if (session('success'))
            <div class="success">
                {{ session('success') }}
            </div>
            @endif

            {{-- Creation links --}}
            <div>
                <div><a href="/sponsors/create">Add new Sponsor</a></div>
                <div><a href="/press/create">Add new press article</a></div>
                <div><a href="/users">List users</a></div>
            </div>


            {{-- Contest Data --}}
            <div>
                <a href="/admin/contest/edit">change contest data</a>
            </div>
            <div>
                <a href="/admin/contest/create">Start new Contest</a>
            </div>

            <div >
                <div>
                    Contest id: {{ $contestData->contest }}
                </div>
                <div>
                    Contest region: {{ $contestData->region  }}
                </div>
                <div>
                    Contest theme: {{ $contestData->theme }}
                </div>
                <div>
                    Contest end date: {{ $contestData->endDate }}
                </div>
                <div>
                    Main prize: {{ $contestData->mainPrize }}
                    <div>
                        {!! nl2br(e($contestData->mainDescr)) !!}
                    </div>
                </div>
                <div>
                    2nd place prize: {{ $contestData->secondPrize }}
                    <div>
                        {!! nl2br(e($contestData->secondDescr)) !!}
                    </div>
                </div>
                <div>
                    3rd place prize: {{ $contestData->thirdPrize }}
                    <div>
                        {!! nl2br(e($contestData->thirdDescr)) !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>


@endsection
