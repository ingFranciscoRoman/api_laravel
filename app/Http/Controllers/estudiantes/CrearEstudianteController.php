<?php

namespace App\Http\Controllers\estudiantes;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use Illuminate\Http\Request;

class CrearEstudianteController extends Controller
{
    public function crearEstudiante (Request $request) {
        $estudiante = Estudiante::create($request->all());
        return response()->json($estudiante, 201);
    }
}
