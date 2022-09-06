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
        return $this->sector."000".$this->ficha_familiar;
    }
    
}
