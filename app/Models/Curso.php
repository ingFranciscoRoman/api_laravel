<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;
    protected $table = 'cursos';
    protected $fillable = ['nombre', 'descripcion', 'profesor_id'];

    public function estudiantes(){
        return $this->hasMany(Estudiante::class);
    }

    public function materias(){
        return $this->belongsToMany(Materia::class, 'materia_curso', 'curso_id', 'materia_id');
    }
}
