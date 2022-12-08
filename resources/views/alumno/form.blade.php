<div class="form-group">
    <label for="inputNombre">Nombre</label>
    <input type="text" class="form-control" id="inputNombre" aria-describedby="emailHelp"
        placeholder="Ingresa el nombre del alumno" name="nombre" value= "{{ isset($alumno->nombre)?$alumno->nombre:'' }}">
</div>
<div class="form-group">
    <label for="inputEdad">Edad</label>
    <input type="text" class="form-control" id="inputEdad" placeholder="Ingresa la edad del alumno" name="edad" value= "{{ isset($alumno->edad)?$alumno->edad:'' }}">
</div>
<input type="submit" class="btn btn-primary" value='{{ $modo }}'></input>



<a href="{{ url('alumno/') }}">Regresar</a>