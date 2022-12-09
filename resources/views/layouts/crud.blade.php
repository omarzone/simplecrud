<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/crud.css') }}">
    <title>CRUD</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="{{ asset('js/crud.js') }}" defer></script>
</head>

<body>

    <div class="container">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid header">




                <h1 class="navbar-brand color"><a class="navbar-brand" style="color:white;" href="/home"> Gestión de
                        alumnos</a></h1>
                <div class="d-flex" role="actions">

                    @if(Route::current()->getName() != 'alumno.edit' && Route::current()->getName() != 'alumno.create')
                    <a href="#" class="btn btn-danger delete_all"><img src="{{ asset('imgs/delete (1).png') }}"
                            class="img-delete" id="button-delete" name="button-delete"
                            data-url="{{ url('/deleteAll') }}"> Eliminar Seleccion</a>
                    @endif

                    <div class="separator"></div>
                    <a href="{{ url('alumno/create') }}" class="btn btn-success"><img src="{{ asset('imgs/plus.png') }}"
                            class="img-add" id="button-add" name="button-add"> añadir nuevo alumno</a>

                    <ul class="navbar-nav ms-auto">

                    <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" style="color:white;" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                   Hola {{ Auth::user()->name }}!
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                    </ul>
                </div>
            </div>
        </nav>


        <main class="py-4">
            @yield('content')
        </main>
    </div>

</body>

</html>