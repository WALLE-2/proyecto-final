<?php

namespace Database\Factories;

use App\Models\Extintor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExtintorFactory extends Factory
{
    protected $model = Extintor::class;

    public function definition()
    {
        return [
            'capacidad' => $this->faker->numberBetween(1, 20),
            'fechafabricacion' => $this->faker->date(),
            'estado' => $this->faker->randomElement(['nuevo', 'usado']),
            'idubicacion' => \App\Models\Ubicacion::factory(),
            'idproveedor' => \App\Models\Proveedor::factory(),
            'idtipo' => \App\Models\Tipo::factory(),
        ];
    }
}

