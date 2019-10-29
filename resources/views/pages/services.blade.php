@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <h1 class="text-center">Services</h1>
    <p class="text-success">This is the services page.</p>
    <p>Services with id = {{ $idForView }} and cost = {{ $costForView }}</p>
   
    @if(count($services) > 0)
        <h2>Our services</h2>
        <ul class="list-group">
            @foreach($services as $service)
                <li class="list-group-item">{{$service}}</li>
            @endforeach
        </ul>
    @endif
@endsection
    