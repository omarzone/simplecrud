<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos['alumnos']= Alumno::paginate(5);
        return view('alumno.index', $datos);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('alumno.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datosAlumno = request()->except('_token');
        Alumno::insert($datosAlumno);
        return redirect('alumno')->with('mensaje','Alumno agregado con exito');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function show(Alumno $alumno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $alumno = Alumno::findOrFail($id);
        return view('alumno.edit', compact('alumno'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosAlumno = request()->except('_token','_method');
        
        Alumno::where('id','=', $id)->update($datosAlumno);
        

        $alumno = Alumno::findOrFail($id);
        // return view('alumno.edit', compact('alumno'));
        return redirect('alumno')->with('mensaje','Alumno modificado con exito');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Alumno  $alumno
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Alumno::destroy($id);
        return redirect('alumno')->with('mensaje','Alumno eliminado con exito');
    }
}
