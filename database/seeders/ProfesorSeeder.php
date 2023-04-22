<?php

namespace Database\Seeders;

use App\Models\Profesor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfesorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $profesor = new Profesor();

        $profesor->nombre = 'Francisco';
        $profesor->apellido = 'Roman';
        $profesor->email = 'franciscoroman@gmail.com';
        $profesor->direccion = 'calle falsa 123';
        $profesor->telefono = '3002378877';

        $profesor->save();

        $profesor2 = new Profesor();

        $profesor2->nombre = 'Miguel';
        $profesor2->apellido = 'Ojeda';
        $profesor2->email = 'viejomigue@gmail.com';
        $profesor2->direccion = 'calle falsa 123';
        $profesor2->telefono = '3002378875';

        $profesor2->save();
    }
}
