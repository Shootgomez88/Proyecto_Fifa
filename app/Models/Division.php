<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'region'];

    public function pais()
    {
        return $this->belongsTo(Pais::class, 'region');
    }
}
