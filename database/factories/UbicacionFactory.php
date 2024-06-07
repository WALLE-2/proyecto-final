<?php

namespace Database\Factories;

use App\Models\Ubicacion;
use Illuminate\Database\Eloquent\Factories\Factory;

class UbicacionFactory extends Factory
{
    protected $model = Ubicacion::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->streetName,
        ];
    }
}
