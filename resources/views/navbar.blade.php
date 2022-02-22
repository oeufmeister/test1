@extends('layouts.app')
@section ('content')
<nav class="navbar navbar-expand-lg navbar-light bg-light">
            <img id="logo" src="{{URL::asset('/image/buku.png')}}" style="height: 25px; padding-left: 3px">
            <a class="navbar-brand" href="#" style="padding-left: 5px">ODSL</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/courses">Courses</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Courses
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="#">Course 1</a>
                    <a class="dropdown-item" href="#">Course 2</a>
                    <a class="dropdown-item" href="#">Course 3</a>
                    </div>
                </li>
                <li class="nav-item ml-auto">
                    <a class="nav-link" id="loreg" href="{{ route('login') }}" >Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link mr-auto" href="{{ route('register') }}">Register</a>
                </li>
                </ul>
            </div>
        </nav>
@endsection