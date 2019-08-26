@extends('layouts.app')

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Alias</th>
            <th>Name</th>
            <th>Birthday</th>
            <th>Died</th>
            <th>Bands</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rockers as $rocker)
            <tr>
                <td>{{ $rocker->alias }}</td>
                <td>{{ $rocker->name }}</td>
                <td>{{ Carbon\Carbon::parse($rocker->bday)->toFormattedDateString() }}</td>
                @if($rocker->died)
                    <td>{{ Carbon\Carbon::parse($rocker->died)->toFormattedDateString() }}</td>
                @else
                    <td>-</td>
                @endif
                <td>{{ $rocker->bands }}</td>
            </tr>
        @endforeach
    </table>
@endsection
