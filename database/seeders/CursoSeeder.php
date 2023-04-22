<?php

namespace Database\Seeders;

use App\Models\Curso;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $curso = new Curso();

        $curso->nombre = "Programación Backend";
        $curso->descripcion = "En este curso aprenderas programacion Backend";
        $curso->profesor_id = "1";

        $curso->save();

        $curso2 = new Curso();

        $curso2->nombre = "Programación Frontend";
        $curso2->descripcion = "En este curso aprenderas Frontend";
        $curso2->profesor_id = "2";

        $curso2->save();
    }
}
