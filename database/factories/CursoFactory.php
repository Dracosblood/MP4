<?php

namespace Database\Factories;

use App\Models\Docente;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $docente = Docente::all();

        return [
            'nombre_materia' => $this->faker->word,
            'descripcion' => $this->faker->sentence,
            'docente_id' => $this->faker->randomElement($docente)->id,
        ];
    }
}