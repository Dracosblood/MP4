<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    public function index()
    {
        $alumno = Alumno::all();
        return $alumno;
    }

    public function show($id)
    {
        $alumno = Alumno::find($id);

        return response()->json($alumno);
    }

    public function store(Request $request)
    {
       

        // Crea un nuevo usuario utilizando los datos de la solicitud
        $alumno = new Alumno();
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->direccion = $request->direccion;
        $alumno->email = $request->email;

        // Guarda el usuario en la base de datos
        $alumno->save();

        // Devuelve una respuesta de éxito
        return response()->json(['message' => 'Alumno creado con éxito'], 201);
    }

    public function update(Request $request, $id)
    {
       
        $alumno = Alumno::find($id);
        $alumno->nombre = $request->nombre;
        $alumno->apellido = $request->apellido;
        $alumno->direccion = $request->direccion;
        $alumno->email = $request->email;
        $alumno->save();

        // Devuelve una respuesta de éxito
        return response()->json(['message' => 'Alumno actualizado con éxito'], 200);
    }

    public function destroy($id)
    {
        $alumno = Alumno::find($id);
        $alumno->delete();

        return response()->json(['message' => 'Alumno eliminado con éxito'], 200);
    }
}
