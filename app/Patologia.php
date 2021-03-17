<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patologia extends Model
{
    protected $guarded = ['id'];

    public function pacientes()
    {
        return $this->belongsToMany(Paciente::class);
    }

    /*public function salaEra()
    {
        return $this->HasMany(salaEra::class);
    }*/

    public function subPatologias()
    {
        return $this->HasMany(subPatologias::class);
    }
}
