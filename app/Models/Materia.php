<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    use HasFactory;
    protected $table = 'materias';
    protected $fillable = ['nombre', 'descripcion', 'curso_id'];

    public function cursos () {
        return $this->belongsToMany(Curso::class, 'materia_curso', 'materia_id', 'curso_id');
    }

    public function profesores () {
        return $this->belongsToMany(Profesor::class, 'profesor_materia');
    }
}
