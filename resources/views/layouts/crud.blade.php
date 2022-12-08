<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
    <title>CRUD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('js/crud.js') }}" defer></script>
</head>
<body>
    
    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid header">
                <h1 class="navbar-brand color">Gestión de alumnos</h1>
                <div class="d-flex" role="actions" >
                    <a href = "#"class="btn btn-danger"><img src="{{ asset('imgs/delete (1).png') }}" class="img-delete" id="button-delete" name="button-delete"> Eliminar</a>
                    <div class="separator"></div>
                    <a href="{{ url('alumno/create') }}" class="btn btn-success"><img src="{{ asset('imgs/plus.png') }}" class="img-add" id="button-add" name="button-add"> añadir nuevo alumno</a>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>
   
</body>
</html>