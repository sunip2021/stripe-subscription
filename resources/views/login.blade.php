@extends('layouts.auth-layout')
@section('content')
<form action="{{route('userlogin')}}" method="post">
    @csrf 
     @session('error')
   <p style="color: red;">{{$value}}</p>
   @endsession
        <h1>Login</h1>
        <fieldset>

            <label for="mail">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

        </fieldset>
        <button type="submit">Login</button>
    </form>
@endsection