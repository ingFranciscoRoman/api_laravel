<?php

namespace App\Http\Controllers\estudiantes;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;

class EstudianteController extends Controller
{
    public function todosEstudiantes () {
        $estudiantes = Estudiante::all();
        return response()->json($estudiantes);
    }
}
