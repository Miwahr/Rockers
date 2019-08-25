@extends('layouts.app')

@section('content')
    <form method="GET" action="{{ route('add_membership') }}">
        <label>Rocker
            <select name="rocker_id">
                @foreach($rockers as $id=>$rocker)
                    <option value="{{$id}}">{{$rocker}}</option>
                @endforeach
            </select>
        </label>
        <label>Band
            <select name="band_id">
                @foreach($bands as $id=>$band)
                    <option value="{{$id}}">{{$band}}</option>
                @endforeach
            </select>
        </label>
    <label>start at
        <input type="date" name="start">
    </label>
    <label>finish at
        <input type="date" name="finish">
    </label>
        <input type="submit" value="Add">
    </form>
@include('layouts.errors')
@endsection
