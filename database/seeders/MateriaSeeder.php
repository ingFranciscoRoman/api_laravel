<?php

namespace Database\Seeders;

use App\Models\Materia;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $materia = new Materia();

        $materia->nombre = 'Arquitectura de BD';
        $materia->descripcion = 'Aprenderas la arquitectura de una BD con Laravel';
        $materia->curso_id = '1';

        $materia->save();

        $materia2 = new Materia();

        $materia2->nombre = 'Semantica';
        $materia2->descripcion = 'Aprenderas Como estructurar un HTML.';
        $materia2->curso_id = '2';

        $materia2->save();
    }
}
