@extends('layouts.crud')

@section('content')

<form action="{{ url('/alumno') }}" method="post">
    @csrf
@include('alumno.form',['modo'=>'Crear']); 

</form>

@endsection