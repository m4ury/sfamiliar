<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

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

    public function ercI_II()
    {
        return $this->pscv()->whereIn('erc', ['I', 'II']);
    }

    public function pscv()
    {
        return $this->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO']);
    }

    public function hta()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'hta');
    }

    public function dm2()
    {
        return DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'dm2');
    }

    public function dlp()
    {
        return DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'dlp');
    }

    public function iam()
    {
        return DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'antecedente iam');
    }
    public function acv()
    {
        return DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'antecedente acv');
    }

    public function in1519()
    {
        return $this->get()->whereBetween('grupo', [15, 19]);
    }
    public function in2024()
    {
        $this->whereBetween('grupo', [20, 24]);
    }
    public function in2529()
    {
        $this->whereBetween('grupo', [25, 29]);
    }
    public function in3034()
    {
        $this->whereBetween('grupo', [30, 34]);
    }
    public function in3539()
    {
        $this->whereBetween('grupo', [35, 39]);
    }
    public function in4044()
    {
        $this->whereBetween('grupo', [40, 44]);
    }
    public function in4549()
    {
        $this->whereBetween('grupo', [45, 49]);
    }
    public function in5054()
    {
        $this->whereBetween('grupo', [50, 54]);
    }
    public function in5559()
    {
        $this->whereBetween('grupo', [55, 59]);
    }
    public function in6064()
    {
        $this->whereBetween('grupo', [60, 64]);
    }
    public function in6569()
    {
        $this->whereBetween('grupo', [65, 69]);
    }
    public function in7074()
    {
        $this->whereBetween('grupo', [70, 74]);
    }
    public function in7579()
    {
        $this->whereBetween('grupo', [75, 79]);
    }
    public function in80()
    {
        $this->where('grupo' >= 80);
    }
}
