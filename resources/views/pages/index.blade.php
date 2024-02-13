@extends('layouts.main-layout')
@section('head')
    <title>Home</title>
@endsection
@section('content')
    <h1>Treni partenti alle ore 10</h1>
    <ul class="row d-flex justify-content-center">
        @foreach ($trains as $train)
            <li class="col-2 card p-2 m-1">
                <h1>{{$train -> azienda}}</h1>
                <h3>{{$train -> stazione_di_partenza}}</h3>
                <h3>{{$train -> stazione_di_arrivo}}</h3>
                <h4>{{$train -> orario_di_partenza}}</h4>
                <h4>{{$train -> orario_di_arrivo}}</h4>
            </li>
        @endforeach
    </ul>
@endsection
