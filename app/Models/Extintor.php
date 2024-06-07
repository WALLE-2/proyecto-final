<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Extintor extends Model
{
    use HasFactory;

    protected $table = 'extintores';

    protected $fillable = [
        'capacidad',
        'fechafabricacion',
        'estado',
        'idubicacion',
        'idproveedor',
        'idtipo'
    ];


    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::class, 'idubicacion');
    }

    public function proveedor()
    {
        return $this->belongsTo(Proveedor::class, 'idproveedor');
    }

    public function tipo()
    {
        return $this->belongsTo(Tipo::class, 'idtipo');
    }

    public function inspecciones()
    {
        return $this->hasMany(Inspeccion::class, 'idextintor');
    }

    public function recargas()
    {
        return $this->hasMany(Recarga::class, 'idextintor');
    }
}
