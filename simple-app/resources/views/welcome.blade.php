@extends('components.template')

@section('title', 'Welcome Page')

@section('content')
    <h1>Welcome {{ $name }} to the Application</h1>
    <p>This is the welcome page content.</p>
    @foreach ($mahasiswa as $person)
        <h2>{{ $person['first_name'] }} {{ $person['last_name'] }}</h2>
    @endforeach
@endsection
