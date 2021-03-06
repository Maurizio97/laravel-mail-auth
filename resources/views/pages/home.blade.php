@extends('layouts.main-layouts')
@section('content')
    @auth
        <h1>
            {{ Auth::user() -> name}}
        </h1>
        <a class="btn btn-danger" href="{{ route('logout') }}">Logout</a>
        <br><br>
    @endauth
    @guest
        
    <h1>
        Login
    </h1>
    <form action="{{ route('login') }}" method="POST">
        @method('POST')
        @csrf
        
        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br>
        <br>
        <button class="btn btn-primary" type="submit" > Login</button>
        <br><br><br>

    </form>
    <h1>
        Register
    </h1>
    <form action="{{ route('register') }}" method="POST">
        @method('POST')
        @csrf
        
        <label for="name">Name</label><br>
        <input type="text" name="name"><br>
        <label for="email">Email</label><br>
        <input type="email" name="email"><br>
        <label for="password">Password</label><br>
        <input type="password" name="password"><br>
        <label for="password_confirmation">Password Confirmation</label><br>
        <input type="password" name="password_confirmation"><br>
        <br>
        <button class="btn btn-primary" type="submit" > Register</button>

    </form>
    @endguest


    <videogames-component></videogames-component>
@endsection