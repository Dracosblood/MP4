<?php

namespace App\Http\Controllers;

use App\Models\Docente;
use Illuminate\Http\Request;

class DocenteController extends Controller
{
    public function index()
    {
        $docente = Docente::all();
        return $docente;
    }

    public function show($id)
    {
        $docente = Docente::find($id);
        return response()->json($docente);
    }

    public function store(Request $request)
    {
        $docente = new Docente();
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->direccion = $request->direccion;
        $docente->email = $request->email;
        $docente->save();
        return response()->json(['message' => 'Docente creado con éxito'], 201);
    }

    public function update(Request $request,string $id)
    {
       
        $docente = Docente::find($id);
        $docente->nombre = $request->nombre;
        $docente->apellido = $request->apellido;
        $docente->direccion = $request->direccion;
        $docente->email = $request->email;
        $docente->save();

        // Devuelve una respuesta de éxito
        return response()->json(['message' => 'Docente actualizado con éxito'], 200);
    }

    public function destroy($id)
    {
        $docente = Docente::find($id);
        $docente->delete();

        return response()->json(['message' => 'Docente eliminado con éxito'], 200);
    }
}
