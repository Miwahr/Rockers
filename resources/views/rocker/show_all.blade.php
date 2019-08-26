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
                <td>{{ $rocker->bday }}</td>
                @if($rocker->died)
                    <td>{{ $rocker->died }}</td>
                @else
                    <td>-</td>
                @endif
                <td>{{ $rocker->bands }}</td>
            </tr>
        @endforeach
    </table>
@endsection
