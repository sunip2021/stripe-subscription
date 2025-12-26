@extends('layouts.auth-layout')
@section('content')

<form action="{{route('saveuser')}}" method="post">
   @session('success')
   <p style="color: green;">{{$value}}</p>
   @endsession
   @session('error')
   <p style="color: red;">{{$value}}</p>
   @endsession
    @csrf
        <h1>Sign Up</h1>
        <fieldset>
             <label for="mail">Name:</label>
            <input type="text" name="name" required>

            <label for="mail">Email:</label>
            <input type="email" name="email" required>

            <label for="password">Password:</label>
            <input type="password" name="password" required>

        </fieldset>
        <button type="submit">Sign Up</button>
    </form>
@endsection