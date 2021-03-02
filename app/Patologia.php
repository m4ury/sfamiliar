<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{
    protected $guarded = ['id'];

    public function scopeSearch($query, $q)
    {
        if ($q)
            return $query->where('nombre_patologia', 'LIKE', "%$q%")
                ->orWhere('descripcion_patologia', 'LIKE', "%$q%");
    }

    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class);
    }
}
