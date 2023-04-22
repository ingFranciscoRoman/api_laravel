<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profesor extends Model
{
    use HasFactory;
    protected $table = 'profesores';
    protected $fillable = ['nombre', 'apellido', 'email', 'direccion', 'telefono'];

    public function materias(){
        return $this->belongsToMany(Materia::class, 'profesor_materia');
    }
}
