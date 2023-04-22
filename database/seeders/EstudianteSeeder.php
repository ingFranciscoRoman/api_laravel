<?php

namespace Database\Seeders;

use App\Models\Estudiante;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $estudiante = new Estudiante();

        $estudiante->nombre = 'Juan';
        $estudiante->apellido = 'Salgado';
        $estudiante->numero_documento = '123456789';
        $estudiante->fecha_nacimiento = '1996-08-17';
        $estudiante->email = 'juancho1996@gmail.com';
        $estudiante->direccion = 'calle falsa 123 centro';
        $estudiante->telefono = '3025897878';
        $estudiante->curso_id = '1';

        $estudiante->save();

        $estudiante2 = new Estudiante();

        $estudiante2->nombre = 'David';
        $estudiante2->apellido = 'Riquelme';
        $estudiante2->numero_documento = '123456798';
        $estudiante2->fecha_nacimiento = '1996-08-17';
        $estudiante2->email = 'davidRique@gmail.com';
        $estudiante2->direccion = 'calle falsa 123 centro';
        $estudiante2->telefono = '3025897875';
        $estudiante2->curso_id = '2';

        $estudiante2->save();
    }
}
