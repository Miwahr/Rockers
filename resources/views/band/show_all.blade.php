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
            <td>{{ $band->name }}</td>
            <td>{{ $band->start_at }}</td>
            @if($band->finish_at)
                <td>{{ $band->finish_at }}</td>
            @else
                <td>-</td>
            @endif
            <td><a href="http://{{ $band->website }}">{{ $band->website }}</a></td>
            <td>{{ $band->members }}</td>
        </tr>
    @endforeach
</table>
@endsection
