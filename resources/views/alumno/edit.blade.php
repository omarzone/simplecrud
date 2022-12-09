@extends('layouts.crud')

@section('content')

<form action="{{ url('/alumno/'.$alumno->id) }}" method="post">
@csrf
{{ method_field('PATCH')}}
@include('alumno.form', ['modo'=>'Editar']);    
</form>

@endsection

