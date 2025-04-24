@extends('components.template')

@section('title', 'Login Page')

@section('content')
    <h1>Login</h1>
    <label for="">Name</label>
    <input type="text" name="name" id="name" required>
    <button type="submit">Submit</button>
@endsection