<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Docente;
use Illuminate\Http\Request;

class CursoController extends Controller
{
    public function index()
    {
        $curso = Curso::all();
        return $curso;
    }

    public function show($id)
    {
        $curso = Curso::find($id);

        
        return response()->json($curso);
    }

    public function store(Request $request)
    {
       

        // Crea un nuevo curso utilizando los datos de la solicitud
        $curso = new Curso();
        $curso->nombre_materia = $request->nombre_materia;
        $curso->descripcion = $request->descripcion;
        $curso->docente_id = $request->docente_id;
        $curso->save();

        return response()->json(['message' => 'Materia creado con éxito'], 201);
    }

    public function update(Request $request, $id)
    {
       
        $curso = Curso::find($id);
        $curso->nombre_materia = $request->nombre_materia;
        $curso->descripcion = $request->descripcion;
        $curso->docente_id = $request->docente_id;
        $curso->save();

        // Devuelve una respuesta de éxito
        return response()->json(['message' => 'Materia actualizado con éxito'], 200);
    }

    public function destroy($id)
    {
        $curso = Curso::find($id);
        $curso->delete();

        return response()->json(['message' => 'Materia eliminado con éxito'], 200);
    }
}