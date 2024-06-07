<?php

namespace Database\Factories;

use App\Models\Proveedor;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProveedorFactory extends Factory
{
    protected $model = Proveedor::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->company,
            'telefono' => $this->faker->phoneNumber, // Asegúrate de que este dato no excede el tamaño permitido
            'correo' => $this->faker->safeEmail,
        ];
    }
}
