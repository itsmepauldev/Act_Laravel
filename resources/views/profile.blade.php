@extends('layouts.app', ['page_title' => 'Profile'])
@section('content')
    <h1>This is Profile Page</h1>
    <h2>{{ $greetings; }}</h2>
   <button class="btn btn-primary btn-lg">Button</button>
   
@endsection
