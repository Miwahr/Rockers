@extends('layouts.app')

@section('content')
<table class="table">
    <thead class="thead-dark">
    <tr>
        <th>Band's name</th>
        <th>Formed</th>
        <th>Disband</th>
        <th>Website</th>
        <th>Members</th>
    </tr>
    </thead>
    <tbody>
    @foreach($bands as $band)
        <tr>
            <td><a href="{{ route('show_band', ['id' => $band->id]) }}">{{ $band->name }}</a></td>
            <td>{{ Carbon\Carbon::parse($band->start_at)->toFormattedDateString() }}</td>
            @if($band->finish_at)
                <td>{{ Carbon\Carbon::parse($band->finish_at)->toFormattedDateString() }}</td>
            @else
                <td>-</td>
            @endif
            <td><a href="http://{{ $band->website }}">{{ $band->website }}</a></td>
            <td>{{ $band->members }}</td>
        </tr>
    @endforeach
</table>
@endsection
