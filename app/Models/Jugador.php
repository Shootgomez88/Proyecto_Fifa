<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'equipo_id', 'pais', 'edad', 'posicion', 'valor_mercado'];

    public function equipo()
    {
        return $this->belongsTo(Equipo::class);
    }

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'pais');
    }
}
