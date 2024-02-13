@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Treni</h1>
    <ul>
        @foreach ($trains as $train)
            <li>{{$train -> azienda}}</li>
        @endforeach
    </ul>
@endsection
