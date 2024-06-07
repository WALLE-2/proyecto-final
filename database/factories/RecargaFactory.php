<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Recarga;
use App\Models\Extintor;

class RecargaFactory extends Factory
{
    protected $model = Recarga::class;

    public function definition()
    {
        return [
            'idextintor' => Extintor::factory(),
            'fecha' => $this->faker->date(),
            'proximarecarga' => $this->faker->date(),
        ];
    }
}
