<?php

namespace App\Http\Controllers;

use App\PacientePatologias;
use App\Patologia;
use Illuminate\Support\Facades\DB;
use App\Paciente;

class EstadisticaController extends Controller
{
    public function index()
    {
        $all = new Paciente();
        /*dd($all->s_erc());*/
        //hta todos
        $hta = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'hta')
            ->count();

        //hta mujeres
        $htaF = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'hta')
            ->where('pacientes.sexo', '=', 'femenino')
            ->count();
        //hta hombres
        $htaM = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'hta')
            ->where('pacientes.sexo', '=', 'masculino')
            ->count();

        //dm2 todos
        $dm2 = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'dm2')
            ->count();

        //dm2 mujeres
        $dm2F = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'dm2')
            ->where('pacientes.sexo', '=', 'femenino')->count();

        //dm2 hombres
        $dm2M = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'dm2')
            ->where('pacientes.sexo', '=', 'masculino')->count();


        //dlp todos
        $dlp = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'dlp')
            ->count();

        //dlp mujeres
        $dlpF = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'dlp')
            ->where('pacientes.sexo', '=', 'femenino')
            ->count();

        //dlp hombres
        $dlpM = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'dlp')
            ->where('pacientes.sexo', '=', 'masculino')
            ->count();

        //iam todos
        $iam = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'antecedente iam')
            ->count();

        //iam mujeres
        $iamF = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'antecedente iam')
            ->where('pacientes.sexo', '=', 'femenino')
            ->count();
        //iam hombres
        $iamM = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'antecedente iam')
            ->where('pacientes.sexo', '=', 'masculino')
            ->count();

        //acv todos
        $acv = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'antecedente acv')
            ->count();

        //acv mujeres
        $acvF = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'antecedente acv')
            ->where('pacientes.sexo', '=', 'femenino')
            ->count();
        //acv hombres
        $acvM = DB::table('pacientes')
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->distinct('paciente_patologia.id', 'paciente_patologia.paciente_id')
            ->where('patologias.nombre_patologia', '=', 'antecedente acv')
            ->where('pacientes.sexo', '=', 'masculino')
            ->count();

        //erc
        $s_erc = $all->s_erc()->count();
        $s_ercM = $all->s_erc()->where('sexo', 'Masculino')->count();
        $s_ercF = $all->s_erc()->where('sexo', 'Femenino')->count();

        $ercI_II = $all->pscv()->whereIn('erc', ['I', 'II'])->count();
        $ercI_IIM = $all->pscv()->whereIn('erc', ['I', 'II'])->where('sexo', 'Masculino')->count();
        $ercI_IIF = $all->pscv()->whereIn('erc', ['I', 'II'])->where('sexo', 'Femenino')->count();

        $ercIIIa = $all->pscv()->where('erc', 'IIIA')->count();
        $ercIIIaM = $all->pscv()->where('erc', 'IIIA')->where('sexo', 'Masculino')->count();
        $ercIIIaF = $all->pscv()->where('erc', 'IIIA')->where('sexo', 'Femenino')->count();

        $ercIIIb = $all->pscv()->where('erc', 'IIIB')->count();
        $ercIIIbM = $all->pscv()->where('erc', 'IIIB')->where('sexo', 'Masculino')->count();
        $ercIIIbF = $all->pscv()->where('erc', 'IIIB')->where('sexo', 'Femenino')->count();

        $ercIV = $all->pscv()->where('erc', 'IV')->count();
        $ercIVM = $all->pscv()->where('erc', 'IV')->where('sexo', 'Masculino')->count();
        $ercIVF = $all->pscv()->where('erc', 'IV')->where('sexo', 'Femenino')->count();

        $ercV = $all->pscv()->where('erc', 'V')->count();
        $ercVM = $all->pscv()->where('erc', 'V')->where('sexo', 'Masculino')->count();
        $ercVF = $all->pscv()->where('erc', 'V')->where('sexo', 'Femenino')->count();
        //pscv todos
        $total_pscv = $all->pscv()->count();
            /*DB::table('pacientes')->select(
            DB::raw('SUM(distinct(paciente_patologia.paciente_id'))
            ->whereIn('patologias.nombre_patologia', ['HTA', 'DLP', 'DM2'])
            ->distinct()
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->count('pacientes.rut');*/

        $m_pscv = $all->pscv()->where('sexo', 'Masculino')->count();/*DB::table('pacientes')->select(
            DB::raw('SUM(distinct(paciente_patologia.paciente_id'))
            ->where('pacientes.sexo', '=', 'Masculino')
            ->whereIn('patologias.nombre_patologia', ['HTA', 'DLP', 'DM2'])
            ->distinct()
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->count('pacientes.rut');*/
        $f_pscv = $all->pscv()->where('sexo', 'Femenino')->count();
            /*DB::table('pacientes')->select(
            DB::raw('SUM(distinct(paciente_patologia.paciente_id'))
            ->where('pacientes.sexo', '=', 'Femenino')
            ->whereIn('patologias.nombre_patologia', ['HTA', 'DLP', 'DM2'])
            ->distinct()
            ->join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')
            ->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')
            ->count('pacientes.rut');*/

        //riesgo bajo todos
        $p_bajo = $all->rcv_bajo()->count();
        //masculino
        $p_bajoM = $all->rcv_bajo()->where('sexo', '=', 'Masculino')->count();
        //femenino
        $p_bajoF = $all->rcv_bajo()->where('sexo', '=', 'Femenino')->count();

        //riesgo moderado todos
        $p_moderado = $all->rcv_mod()->count();
        $p_moderadoM = $all->rcv_mod()->where('sexo', '=', 'Masculino')->count();
        $p_moderadoF = $all->rcv_mod()->where('sexo', '=', 'Femenino')->count();

        //riesgo alto todos
        $p_alto = $all->rcv_alto()->count();
        $p_altoM = $all->rcv_alto()->where('sexo', '=', 'Masculino')->count();
        $p_altoF = $all->rcv_alto()->where('sexo', '=', 'Femenino')->count();

        return view('estadisticas.index', compact('all','total_pscv', 'm_pscv', 'f_pscv', 'p_bajo', 'p_moderado', 'p_alto', 'p_bajoM', 'p_bajoF', 'p_moderadoM', 'p_moderadoF', 'p_altoM', 'p_altoF', 'hta', 'dm2', 'dlp', 'htaF', 'htaM', 'dm2M', 'dm2F', 'dlpM', 'dlpF', 'iam', 'iamM', 'iamF', 'acv', 'acvF', 'acvM', 's_erc', 's_ercM', 's_ercF', 'ercI_II', 'ercI_IIF', 'ercI_IIM', 'ercIIIa', 'ercIIIaF', 'ercIIIaM','ercIIIb', 'ercIIIbF', 'ercIIIbM', 'ercIV', 'ercIVF', 'ercIVM', 'ercV', 'ercVF', 'ercVM')
        );
    }
}
