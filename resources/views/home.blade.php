@extends('layouts.main-layout')


@section('content')
    <div>
        <h1>Tratte</h1>
        <ul>
            @foreach ($trattas as $tratta)
                <li> {{ $tratta->id }} : {{ $tratta->azienda }} </li>
            @endforeach
        </ul>
    </div>
@endsection
