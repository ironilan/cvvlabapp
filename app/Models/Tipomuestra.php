<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipomuestra extends Model
{
    use HasFactory;

    public function examenes()
    {
        return $this->hasMany(Examen::class);
    }
}
