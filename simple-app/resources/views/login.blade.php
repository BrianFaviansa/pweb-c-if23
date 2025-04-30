@extends('components.template')

@section('title', 'Login Page')

@section('content')
    <h1>Login</h1>
    <label for="">Name</label>
    <form action="{{ route('login.post') }}", method="POST">
        @csrf
        <input type="text" name="name" id="name" required>
        <button type="submit">Submit</button>
    </form>
@endsection