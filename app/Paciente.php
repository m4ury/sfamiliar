<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Paciente extends Model
{

    protected $casts = [
        'fecha_fallecido' => 'date',
    ];


    protected $guarded = ['id'];

    /* protected $fillable = ['rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sexo', 'telefono', 'direccion', 'fecha_nacimiento', 'comuna', 'migrante', 'e_civil', 'escolaridad', 'sector', 'parentesco', 'profesion', 'ingreso', 'prevision', 'fallecido', 'fecha_fallecido']; */

    public function fullName()
    {
        return ucfirst($this->nombres ?? "") . " " . ucfirst($this->apellidoP ?? "") . " " . ucfirst($this->apellidoM ?? "");
    }

    public function edad()
    {
        return Carbon::parse($this->fecha_nacimiento)->age;
    }

    public function getGrupoAttribute()
    {
        return Carbon::parse($this->fecha_nacimiento)->age;
    }

    public function familia()
    {
        return $this->belongsTo(Familia::class);
    }

    public function patologias()
    {
        return $this->belongsToMany(Patologia::class)->withPivot('created_at');
    }

    public function scopeSearch($query, $q)
    {
        if ($q) return $query->where('sexo', 'LIKE', "%$q%")->orWhere('sector', 'LIKE', "%$q%");
    }

    public function sinFamilia()
    {
        return $this->whereNull('familia_id')->whereFallecido(0);
    }

    public function ultFicha()
    {
        return $this->select('ficha')
            ->whereNotNull('ficha')
            ->orderBy('created_at', 'asc')
            ->get();
    }
}
