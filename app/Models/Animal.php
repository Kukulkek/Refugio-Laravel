<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    //Scope

    public function scopeNombre($query, $Nombre)
    {
        if($Nombre)
            return $query->where('Nombre', 'LIKE' , "%$Nombre%");

    }
    public function raza()
    {
        return $this->hasOne('App\Models\Raza', 'id', 'raza_id');
    }

    public function especie()
    {
        return $this->hasOne('App\Models\Especie', 'id', 'especie_id');
    }
}
