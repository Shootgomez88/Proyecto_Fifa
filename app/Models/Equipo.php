<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'pais',
        'division',
        'fundado_en',
        'estadio',
        'titulos',
    ];

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais');
    }

    public function division()
    {
        return $this->belongsTo(Division::class, 'division');
    }
}
