<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Examen extends Model
{
    use HasFactory;

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function tipomuestra()
    {
        return $this->belongsTo(Tipomuestra::class);
    }


    protected $guarded = ['id'];

    public function getRouteKeyName()
    {
        return "slug";
    }

    // public function category()
    // {
    //     return $this->belongsTo(Category::class);
    // }
}
