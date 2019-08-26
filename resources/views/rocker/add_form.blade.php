@extends('layouts.app')

@section('content')
    <form method="GET" action="{{ route('add_rocker') }}">
        <input type="text" name="alias" placeholder="Alias">
        <input type="text" name="name" placeholder="Name">
        <label>birth
            <input type="date" name="bday">
        </label>
        <label>died
            <input type="date" name="died">
        </label>
        <input type="submit" value="Add">
    </form>
    @include('layouts.errors')
@endsection
