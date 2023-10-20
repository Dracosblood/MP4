<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(DocenteSeeder::class);
        $this->call(AlumnoSeeder::class);
        $this->call(CursoSeeder::class);
        $this->call(MatriculaSeeder::class); 
        $this->call(AsistenciaSeeder::class);
}
}