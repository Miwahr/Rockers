@extends('layouts.app')

@section('content')
    @auth
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('add_band_form') }}">Add band</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('add_rocker_form') }}">Add rocker</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('add_membership_form') }}">Add membership</a>
            </li>
        </ul>
    @endauth
@endsection
