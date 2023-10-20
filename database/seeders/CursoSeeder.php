<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Docente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CursoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
            $docente = Docente::factory()->create();
            Curso::factory()->create([
                'docente_id' => $docente->id,
            ]);
        
    }
}
