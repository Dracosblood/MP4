<?php

namespace App\Http\Controllers;

use App\Models\Matricula;
use Illuminate\Http\Request;

class MatriculaController extends Controller
{
    public function index()
    {
        $matricula = Matricula::all();
        return $matricula;
    }
    
    public function show($id)
    {
        $matricula = Matricula::find($id);

        if(!$matricula){
            return response()->json(['message' => 'Matricula no Encontrada'], 404);
        }

        return response()->json($matricula);
    }


    public function store(Request $request)
    {
        
    }

    public function update(Request $request, Matricula $matricula)
    {

    }

    public function destroy($id)
    {
        $matricula = Matricula::find($id);

        $matricula->delete();

        return response()->json(['message' => 'Usuario eliminado con éxito'], 200);
    }
}
