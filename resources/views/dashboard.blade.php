
@extends('layouts.layout')
@section('content')
<div class="container">
    <h1>{{auth()->user()->name}}</h1>
</div>

@endsection