<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Ubicacion;
use App\Models\Proveedor;
use App\Models\Tipo;
use App\Models\Extintor;
use App\Models\Inspeccion;
use App\Models\Recarga;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Crear ubicaciones
        Ubicacion::factory(10)->create();
        
        // Crear proveedores
        Proveedor::factory(10)->create();
        
        // Crear tipos
        Tipo::factory(10)->create();
        
        // Crear extintores
        Extintor::factory(10)->create();
        
        // Crear inspecciones
        Inspeccion::factory(10)->create();
        
        // Crear recargas
        Recarga::factory(10)->create();
    }
}
