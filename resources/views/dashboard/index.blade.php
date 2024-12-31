@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    @if($user->hasRole('SuperAdmin'))
        <h1>Halo Super Admin, {{ $user->name }}</h1>
        <p>You have access to all features.</p>
    @elseif($user->hasRole('Admin'))
        <h1>Halo Admin, {{ $user->name }}</h1>
        <p>Fighting</p>
    @else
        <h1>Halo, {{ $user->name }}</h1>
        <p>Welcome to your dashboard.</p>
    @endif
@endsection
