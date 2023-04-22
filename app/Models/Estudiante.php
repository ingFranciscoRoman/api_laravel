<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use const http\Client\Curl\Versions\CURL;

class Estudiante extends Model
{
    use HasFactory;
    protected $table = 'estudiantes';
    protected $fillable = ['nombre', 'apellido', 'numero_documento' ,'fecha_nacimiento', 'email', 'direccion', 'telefono', 'curso_id'];

    public function curso(){
        return $this->belongsTo(Curso::class);
    }
}
