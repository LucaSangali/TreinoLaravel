@extends('template')

@section('title')
    Notas
@stop

@section('content')
    <h1>Anotações</h1>
    <ul>
        @foreach($notas as $notas)
            <li>{{ $notas }}</li>
        @endforeach
    </ul>
@stop   