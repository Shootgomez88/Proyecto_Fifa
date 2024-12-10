<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class dam extends Model
{
    protected $fillable = [
        
        'id',
        'description',
        'has_professor',
        'year',
        'created_at',
        'avg_mark',
        'name',
        'course',
    ];
}
