<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $guarded = ['id'];


    public function pacientes()
    {
        return $this->hasMany(Paciente::class);
    }

    public function fichaFamiliar()
    {
        return $this->sector . '-' . $this->ficha_familiar;
    }

    public function vivienda()
    {
        return $this->hasOne(Vivienda::class);
    }

    public function evaluacion()
    {
        return $this->hasOne(Evaluacion::class);
    }
}
