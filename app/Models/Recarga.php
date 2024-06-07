<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recarga extends Model
{
    use HasFactory;

    protected $fillable = [
        'idextintor', 
        'fecha', 
        'proximarecarga'
    ];

    public function extintor()
    {
        return $this->belongsTo(Extintor::class, 'idextintor');
    }
}
