@extends('layouts.layout')
@section('content')
<div class="container">
    <div class="row subscription-row">

        @foreach($plans as $plan)
        <div class="col-sm-4">
            <div class="card subscription-card">
                <h2>{{$plan->name}}</h2>
                <h4>${{$plan->amount}} Charge</h4>
                <button class="btn btn-primary">Subscribe</button>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection