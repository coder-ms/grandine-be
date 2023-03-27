@extends('layouts.admin')

@section('content')
    <h2>ELENCO PRATICHE</h2>
    <ul>
        @foreach ($practices as $practice)
            <li>{{$practice->plate}}</li>            
        @endforeach
    </ul>
@endsection