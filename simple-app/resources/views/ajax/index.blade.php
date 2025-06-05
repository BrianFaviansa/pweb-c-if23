@extends('components.template')

@section('title', 'Exchange Page')

@section('content')

  <h1>Nilai Tukar Dollar</h1>

  @php
    use Carbon\Carbon;
    $carbonDate = Carbon::parse($response['time_next_update_utc'])->locale('id_ID')->diffForHumans();
  @endphp

  <h2>Next update : {{ $carbonDate }}</h2>


  @foreach ($response['rates'] as $currency => $value)
    <p>{{ $currency }} : {{ $value }}</p>
  @endforeach

@endsection
