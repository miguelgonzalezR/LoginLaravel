@extends('base')

@section('content')

    <h1>home</h1>

    @auth
        <p>Bienvenido {{auth()->user()->username}}, esta autentificado</p>
        <p><a href="/logout">Logout</a></p>
    @endauth

    @guest
        <p>Loguiate bro <a href="/login">Login</a></p>
    @endguest

@endsection



