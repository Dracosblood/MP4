<?php

namespace Database\Factories;

use App\Models\Alumno;
use App\Models\Asistencia;
use App\Models\Matricula;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Asistencia>
 */
class AsistenciaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Asistencia::class;
    public function definition(): array
    {
        return [
            'alumno_id' => function () {
                return Alumno::factory()->create()->id;
            },
            'matricula_id' => function () {
                return Matricula::factory()->create()->id;
            },
            'fecha' => $this->faker->date,
            'Asistencia' => $this->faker->randomElement(['A', 'T', 'F']),
        ];
    }
}
