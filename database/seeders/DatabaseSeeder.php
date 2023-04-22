<?php

namespace Database\Seeders;

use App\Models\Profesor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // $this->call(ProfesorSeeder::class);
        // Profesor::factory(10)->create();

        $this->call(ProfesorSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(EstudianteSeeder::class);
        $this->call(MateriaSeeder::class);

    }
}
