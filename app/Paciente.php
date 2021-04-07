<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $guarded = ['id'];
    protected $fillable = ['rut', 'nombres', 'apellidoP', 'apellidoM', 'sexo', 'telefono', 'direccion', 'fecha_nacimiento', 'comuna', 'migrante', 'pueblo_originario', 'compensado', 'riesgo_cv', 'erc'];

    public function fullName()
    {
        return ucfirst($this->nombres) . " " . ucfirst($this->apellidoP) . " " . ucfirst($this->apellidoM);
    }

    public function edad()
    {
        return Carbon::parse($this->fecha_nacimiento)->age;

    }

    public function getGrupoAttribute()
    {
        return Carbon::parse($this->fecha_nacimiento)->age;
    }

    public function controls()
    {
        return $this->hasMany(Control::class);
    }

    public function patologias()
    {
        return $this->belongsToMany(Patologia::class);
    }

    public function scopeSearch($query, $q)
    {
        if ($q)
            return $query->where('sexo', 'LIKE', "%$q%")
                ->orWhere('sector', 'LIKE', "%$q%");
    }

    public function rcv_bajo()
    {
        return $this->whereRiesgo_cv('BAJO');
    }

    public function rcv_mod()
    {
        return $this->whereRiesgo_cv('MODERADO');
    }

    public function rcv_alto()
    {
        return $this->whereRiesgo_cv('ALTO');
    }

    public function s_erc()
    {
        return $this->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereErc('sin');
    }

    public function pscv()
    {
        return $this->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO']);
    }
}
