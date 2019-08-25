@extends('layouts.app')

@section('content')
    <form method="GET" action="{{ route('add_band') }}">
        <input type="text" name="name" placeholder="Name band">
        <label>Start at
            <input type="date" name="start_at">
        </label>
        <label>Finish at
            <input type="date" name="finish_at">
        </label>
        <input type="text" name="website" placeholder="Website">
        <input type="submit" value="Add">
    </form>
@include('layouts.errors')
@endsection
