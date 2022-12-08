@extends('layouts.crud')

@section('content')


@if(Session::has('mensaje'))

{{ Session::get('mensaje')}}

@endif





<table class="table table-bordered">
    <thead>
        <tr>
            <th scope="col" class="select-all"><label><input type="checkbox" id="checkAll" name="checkAll"> Seleccionar
                    todos</label></th>
            <td>#id</td>
            <td>Nombre</td>
            <td>Edad</td>
            <td>Acciones</td>
        </tr>
    </thead>
    <tbody>
        @foreach( $alumnos as $alumno)
        <tr>
            <td scope="row"><input type="checkbox" id="checkUser" name="checkUser"></td>
            <td>{{ $alumno->id }}</td>
            <td>{{ $alumno->nombre }}</td>
            <td>{{ $alumno->edad }}</td>
            <td><a href="{{ url('/alumno/'.$alumno->id.'/edit') }}"><button class="btn btn-outline-warning"><img
                            src="{{ asset('imgs/edit-info.png') }}" class="img-edit" id="button-edit" name="button-edit"></button></a>
                <form action="{{ url('/alumno/'.$alumno->id ) }}" method="POST" style="float: left; padding-left:10px;">
                    @csrf
                    {{ method_field('DELETE')}}

                    <button type="submit" class="btn btn-outline-danger"
                        onclick="return confirm('Seguro que desea borrar el registro?')"><img src="{{ asset('imgs/delete (1).png') }}"
                            class="img-edit"></button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>


@endsection