<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Paciente extends Model
{
    protected $guarded = ['id'];
    /*protected $fillable = ['rut', 'ficha', 'nombres', 'apellidoP', 'apellidoM', 'sexo', 'telefono', 'direccion', 'fecha_nacimiento', 'comuna', 'migrante', 'pueblo_originario', 'compensado', 'riesgo_cv', 'erc', 'racVigente', 'vfgVigente', 'fondoOjoVigente', 'ecgVigente', 'ldlVigente'];*/

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
        if ($q) return $query->where('sexo', 'LIKE', "%$q%")->orWhere('sector', 'LIKE', "%$q%");
    }

    //seccion A

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

    public function ercIIIa()
    {
        return $this->pscv()->whereErc('IIIA');
    }

    public function ercIIIb()
    {
        return $this->pscv()->whereErc('IIIB');
    }

    public function ercIV()
    {
        return $this->pscv()->whereErc('IV');
    }

    public function ercV()
    {
        return $this->pscv()->whereErc('V');
    }

    public function pscv()
    {
        return $this->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO']);
    }

    public function hta()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')->where('patologias.nombre_patologia', '=', 'hta');
    }

    public function dm2()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')->where('patologias.nombre_patologia', '=', 'dm2');
    }

    public function dlp()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')->where('patologias.nombre_patologia', '=', 'dlp');
    }

    public function iam()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')->where('patologias.nombre_patologia', '=', 'antecedente iam');
    }

    public function acv()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')->where('patologias.nombre_patologia', '=', 'antecedente acv');
    }

    public function tbq()
    {
        return $this->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')->where('patologias.nombre_patologia', '=', 'tabaquismo');
    }

    //seccion B

    public function pa140()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.last', '=', 1)->where('controls.pa_menor_140_90', '=', 1)->latest('controls.fecha_control');
    }

    public function pa150()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.last', '=', 1)->where('controls.pa_menor_150_90', '=', 1)->latest('controls.fecha_control');
    }

    public function hbac17()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.last', '=', 1)->where('controls.hba1cMenor7Porcent', '=', 1)->latest('controls.fecha_control');
    }

    public function hbac18()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.last', '=', 1)->where('controls.hba1cMenor8Porcent', '=', 1)->latest('controls.fecha_control');
    }

    public function hbac17Pa140Ldl100()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.last', '=', 1)->where('controls.pa_menor_140_90', '=', 1)->where('controls.hba1cMenor7Porcent', '=', 1)->where('controls.ldlMenor100', '=', 1)->latest('controls.fecha_control');
    }

    public function ldl100()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.last', '=', 1)->where('controls.ldlMenor100', '=', 1)->latest('controls.fecha_control');
    }

    public function aspirinas()
    {
        return $this->where('usoAspirinas', '=', 1);
    }

    public function estatinas()
    {
        return $this->where('usoEstatinas', '=', 1);
    }

    //seccion C

    public function racVigente()
    {
        return $this->where('racVigente', '!=', '000/00/00');
    }

    public function vfgVigente()
    {
        return $this->where('vfgVigente', '!=', '000/00/00');
    }

    public function fondoOjoVigente()
    {
        return $this->where('fondoOjoVigente', '!=', '000/00/00');
    }

    public function controlPodologico_alDia()
    {
        return $this->where('controlPodologico_alDia', '!=', '000/00/00');
    }

    public function ecgVigente()
    {
        return $this->where('ecgVigente', '!=', '000/00/00');
    }

    public function usoInsulina()
    {
        return $this->where('usoInsulina', '=', 1);
    }

    public function insulinaHba1C(){
        return $this->hba1cMayorIgual9Porcent()->where('usoInsulina', '=', 1);
    }

    public function hba1cMayorIgual9Porcent()
    {
        return $this->join('controls', 'controls.paciente_id', 'pacientes.id')->where('controls.last', '=', 1)->where('controls.hba1cMayorIgual9Porcent', '=', 1)->latest('controls.fecha_control');
    }

    public function usoIecaAraII()
    {
        return $this->where('usoIecaAraII', '=', 1);
    }

    public function ldlVigente()
    {
        return $this->where('ldlVigente', '!=', '000/00/00');
    }
}
