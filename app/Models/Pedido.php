<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    public function pedidodetalles()
    {
        return $this->hasMany(Pedidodetalle::class);
    }

    public function cliente()
    {
        return $this->belongsTo(User::class, 'cliente_id');
    }


}
