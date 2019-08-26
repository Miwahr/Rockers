@extends('layouts.app')

@section('styles')
    <link href="{{ asset('css/show_band.css') }}" rel="stylesheet">
@endsection

@section('content')

    <div class="container  text-center">
        <h1>{{ $band->name }}</h1>
    <div class="row mb-3">
        <div class="col-md-8 themed-grid-col">

            <div class="row">
                <div class="col-md-6 themed-grid-col">Start at: {{ Carbon\Carbon::parse($band->start_at)->toFormattedDateString() }}</div>
                <div class="col-md-6 themed-grid-col">Finish at:
                    @if($band->finish_at)
                        {{ Carbon\Carbon::parse($band->finish_at)->toFormattedDateString() }}
                    @else
                       present time
                    @endif
                </div>
            </div>
            <div class="pb-3">
                <h4>Website: <a href="http://{{ $band->website }}">{{ $band->website }}</a></h4>
            </div>
        </div>
        <div class="col-md-4 themed-grid-col">Members:<br>
            {{ $band->members }}
        </div>
    </div>
    </div>
@endsection
