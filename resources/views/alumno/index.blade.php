@extends('layouts.crud')

@section('content')


@if(Session::has('mensaje'))

{{ Session::get('mensaje')}}

@endif




<div class="container">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col" class="select-all"><label><input type="checkbox" id="checkAll" name="checkAll">
                        Seleccionar
                        todos</label></th>
                <td>#id</td>
                <td>Nombre</td>
                <td>Edad</td>
                <td>Acciones</td>
            </tr>
        </thead>
        <tbody>
            @if(!empty($alumnos) && $alumnos->count())
            @foreach( $alumnos as $alumno)
            <tr>
                <td scope="row"><input type="checkbox" class="sub_chk" data-id="{{$alumno->id}}"></td>
                <td>{{ $alumno->id }}</td>
                <td>{{ $alumno->nombre }}</td>
                <td>{{ $alumno->edad }}</td>
                <td><a href="{{ url('/alumno/'.$alumno->id.'/edit') }}"><button class="btn btn-outline-warning"><img
                                src="{{ asset('imgs/edit-info.png') }}" class="img-edit" id="button-edit"
                                name="button-edit"></button></a>
                    <form action="{{ url('/alumno/'.$alumno->id ) }}" method="POST"
                        style="float: left; padding-left:10px;">
                        @csrf
                        {{ method_field('DELETE')}}

                        <button type="submit" class="btn btn-outline-danger"
                            onclick="return confirm('Seguro que desea borrar el registro?')"><img
                                src="{{ asset('imgs/delete (1).png') }}" class="img-edit"></button>
                    </form>
                </td>
            </tr>
            @endforeach
            @else
            <tr>

                <td colspan="10">No hay datos para mostrar</td>

            </tr>

            @endif
        </tbody>
    </table>

    {!! $alumnos->links() !!}
</div>


@endsection