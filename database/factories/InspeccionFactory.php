<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Inspeccion;
use App\Models\Extintor;

class InspeccionFactory extends Factory
{
    protected $model = Inspeccion::class;

    public function definition()
    {
        return [
            'idextintor' => Extintor::factory(),
            'fecha' => $this->faker->date(),
            'proximainspeccion' => $this->faker->date(),
        ];
    }
}
