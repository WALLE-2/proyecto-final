<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inspeccion extends Model
{
    use HasFactory;
    
        protected $table = 'inspecciones';
    
    protected $fillable = [
        'idextintor', 
        'fecha', 
        'proximainspeccion'
    ];

    public function extintor()
    {
        return $this->belongsTo(Extintor::class, 'idextintor');
    }
}


