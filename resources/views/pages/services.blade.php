@extends('layouts.app')

@section('title', 'Services')

@section('content')
    <h1 class="text-center">Services</h1>
    <p class="text-success">This is the services page.</p>
    <p>Services with id = {{ $idForView }} and cost = {{ $costForView }}</p>

@endsection
    