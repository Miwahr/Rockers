@extends('layouts.app')

@section('content')
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
            <a class="nav-link" href="{{ route('show_all_bands') }}">Show all bands</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('show_all_rockers') }}">Show all rockers</a>
        </li>

    </ul>
@endsection
