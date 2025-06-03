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

    public function planes()
    {
        return $this->hasMany(Plan::class);
    }

    public function evaluaciones()
    {
        return $this->hasMany(Evaluacion::class);
    }

    // Para obtener la última evaluación:
    public function ultimaEvaluacion()
    {
        return $this->hasOne(Evaluacion::class)->latestOfMany('fecha_evaluacion');
    }
}
