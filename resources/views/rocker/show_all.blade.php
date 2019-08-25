@extends('layouts.app')

@section('content')
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th>Alias</th>
            <th>First name</th>
            <th>Last name</th>
            <th>Birthday</th>
            <th>Died</th>
        </tr>
        </thead>
        <tbody>
        @foreach($rockers as $rocker)
            <tr>
                <td>{{ $rocker->alias }}</td>
                <td>{{ $rocker->first_name }}</td>
                <td>{{ $rocker->last_name }}</td>
                <td>{{ $rocker->bday }}</td>
                @if($rocker->died)
                    <td>{{ $rocker->died }}</td>
                @else
                    <td>-</td>
                @endif

            </tr>
        @endforeach
    </table>
@endsection
