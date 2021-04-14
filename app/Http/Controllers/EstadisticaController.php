<?php

namespace App\Http\Controllers;

use App\PacientePatologias;
use App\Patologia;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
use App\Paciente;

use function GuzzleHttp\Promise\all;

class EstadisticaController extends Controller
{
    public function index()
    {
        $all = new Paciente;
        //hta todos

        //$hta_1519M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->where('sexo', 'masculino')->where('nombre_patologia', 'hta')->get()->whereBetween('grupo', [15, 19])->count();
        //dd($hta_1519M);

        $hta = $all->hta()->count();
        $htaF = $all->hta()->where('pacientes.sexo', '=', 'femenino')->count();

        $hta_1519F = $all->hta()->get()->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Femenino')->count();
        $hta_2024F = $all->hta()->get()->whereBetween('grupo', [20, 24])->where('sexo', '=', 'Femenino')->count();
        $hta_2529F = $all->hta()->get()->whereBetween('grupo', [25, 29])->where('sexo', '=', 'Femenino')->count();
        $hta_3034F = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count('nombre_patologia', 'hta');
        $hta_3539F = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count('nombre_patologia', 'hta');
        $hta_4044F = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count('nombre_patologia', 'hta');
        $hta_4549F = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count('nombre_patologia', 'hta');
        $hta_5054F = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count('nombre_patologia', 'hta');
        $hta_5559F = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count('nombre_patologia', 'hta');
        $hta_6064F = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count('nombre_patologia', 'hta');
        $hta_6569F = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count('nombre_patologia', 'hta');
        $hta_7074F = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count('nombre_patologia', 'hta');
        $hta_7579F = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count('nombre_patologia', 'hta');
        $hta_80F = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->distinct()->get()->where('grupo' >= 80)->where('sexo', 'Femenino')->count('nombre_patologia', 'hta');

        $htaM = $all->hta()->where('pacientes.sexo', '=', 'Masculino')->count();
        $hta_1519M = $all->hta()->get()->whereBetween('grupo', [15, 19])->where('sexo', '=', 'Masculino')->count();
        $hta_2024M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_2529M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_3034M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_3539M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_4044M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_4549M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_5054M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_5559M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_6064M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_6569M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_7074M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_7579M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->get()->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        $hta_80M = Paciente::join('paciente_patologia', 'paciente_patologia.paciente_id', '=', 'pacientes.id')->join('patologias', 'patologias.id', '=', 'paciente_patologia.patologia_id')->whereIn('riesgo_cv', ['BAJO', 'MODERADO', 'ALTO'])->distinct()->get()->where('grupo' >= 80)->where('sexo', 'Masculino')->count('nombre_patologia', 'hta');
        //dm2 todos
        $dm2 = $all->dm2()->count();
        $dm2F = $all->dm2()->where('pacientes.sexo', '=', 'femenino')->count();
        $dm2M = $all->dm2()->where('pacientes.sexo', '=', 'masculino')->count();

        //dlp todos
        $dlp = $all->dlp()->count();
        $dlpF = $all->dlp()->where('pacientes.sexo', '=', 'femenino')->count();
        $dlpM = $all->dlp()->where('pacientes.sexo', '=', 'masculino')->count();

        //iam todos
        $iam = $all->iam()->count();
        $iamF = $all->iam()->where('pacientes.sexo', '=', 'femenino')->count();
        $iamM = $all->iam()->where('pacientes.sexo', '=', 'masculino')->count();

        //acv todos
        $acv = $all->acv()->count();
        $acvF = $all->acv()->where('pacientes.sexo', '=', 'femenino')->count();
        $acvM = $all->acv()->where('pacientes.sexo', '=', 'masculino')->count();

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
        $m_pscv = $all->pscv()->where('sexo', 'Masculino')->count();
        $f_pscv = $all->pscv()->where('sexo', 'Femenino')->count();
        $pscv_1519M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $pscv_1519F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $pscv_2024M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $pscv_2024F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $pscv_2529M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $pscv_2529F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $pscv_3034M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $pscv_3034F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $pscv_3539M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $pscv_3539F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $pscv_4044M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $pscv_4044F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $pscv_4549M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $pscv_4549F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $pscv_5054M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $pscv_5054F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $pscv_5559M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $pscv_5559F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $pscv_6064M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $pscv_6064F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $pscv_6569M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $pscv_6569F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $pscv_7074M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $pscv_7074F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $pscv_7579M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $pscv_7579F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $pscv_80M = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count();
        $pscv_80F = Paciente::all()->whereIn('riesgo_cv', ['ALTO', 'BAJO', 'MODERADO'])->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count();

        //riesgo BAJO todos
        $p_bajo = $all->rcv_bajo()->count();
        $p_bajoM = $all->rcv_bajo()->where('sexo', '=', 'Masculino')->count();
        $p_bajoF = $all->rcv_bajo()->where('sexo', '=', 'Femenino')->count();
        $bajo_1519M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $bajo_1519F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $bajo_2024M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $bajo_2024F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $bajo_2529M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $bajo_2529F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $bajo_3034M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $bajo_3034F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $bajo_3539M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $bajo_3539F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $bajo_4044M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $bajo_4044F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $bajo_4549M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $bajo_4549F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $bajo_5054M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $bajo_5054F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $bajo_5559M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $bajo_5559F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $bajo_6064M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $bajo_6064F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $bajo_6569M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $bajo_6569F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $bajo_7074M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $bajo_7074F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $bajo_7579M = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $bajo_7579F = Paciente::all()->where('riesgo_cv', 'BAJO')->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $bajo_80M = Paciente::all()->where('riesgo_cv', 'BAJO')->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count();
        $bajo_80F = Paciente::all()->where('riesgo_cv', 'BAJO')->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count();

        //riesgo MODERADO todos
        $p_moderado = $all->rcv_mod()->count();
        $p_moderadoM = $all->rcv_mod()->where('sexo', '=', 'Masculino')->count();
        $p_moderadoF = $all->rcv_mod()->where('sexo', '=', 'Femenino')->count();
        $mod_1519M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $mod_1519F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $mod_2024M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $mod_2024F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $mod_2529M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $mod_2529F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $mod_3034M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $mod_3034F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $mod_3539M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $mod_3539F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $mod_4044M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $mod_4044F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $mod_4549M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $mod_4549F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $mod_5054M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $mod_5054F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $mod_5559M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $mod_5559F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $mod_6064M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $mod_6064F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $mod_6569M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $mod_6569F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $mod_7074M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $mod_7074F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $mod_7579M = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $mod_7579F = Paciente::all()->where('riesgo_cv', 'MODERADO')->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $mod_80M = Paciente::all()->where('riesgo_cv', 'MODERADO')->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count();
        $mod_80F = Paciente::all()->where('riesgo_cv', 'MODERADO')->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count();

        //riesgo ALTO todos
        $p_alto = $all->rcv_alto()->count();
        $p_altoM = $all->rcv_alto()->where('sexo', '=', 'Masculino')->count();
        $p_altoF = $all->rcv_alto()->where('sexo', '=', 'Femenino')->count();
        $alto_1519M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [15, 19])->where('sexo', 'Masculino')->count();
        $alto_1519F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [15, 19])->where('sexo', 'Femenino')->count();
        $alto_2024M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [20, 24])->where('sexo', 'Masculino')->count();
        $alto_2024F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [20, 24])->where('sexo', 'Femenino')->count();
        $alto_2529M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [25, 29])->where('sexo', 'Masculino')->count();
        $alto_2529F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [25, 29])->where('sexo', 'Femenino')->count();
        $alto_3034M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [30, 34])->where('sexo', 'Masculino')->count();
        $alto_3034F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [30, 34])->where('sexo', 'Femenino')->count();
        $alto_3539M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [35, 39])->where('sexo', 'Masculino')->count();
        $alto_3539F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [35, 39])->where('sexo', 'Femenino')->count();
        $alto_4044M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [40, 44])->where('sexo', 'Masculino')->count();
        $alto_4044F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [40, 44])->where('sexo', 'Femenino')->count();
        $alto_4549M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [45, 49])->where('sexo', 'Masculino')->count();
        $alto_4549F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [45, 49])->where('sexo', 'Femenino')->count();
        $alto_5054M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [50, 54])->where('sexo', 'Masculino')->count();
        $alto_5054F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [50, 54])->where('sexo', 'Femenino')->count();
        $alto_5559M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [55, 59])->where('sexo', 'Masculino')->count();
        $alto_5559F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [55, 59])->where('sexo', 'Femenino')->count();
        $alto_6064M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [60, 64])->where('sexo', 'Masculino')->count();
        $alto_6064F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [60, 64])->where('sexo', 'Femenino')->count();
        $alto_6569M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [65, 69])->where('sexo', 'Masculino')->count();
        $alto_6569F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [65, 69])->where('sexo', 'Femenino')->count();
        $alto_7074M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [70, 74])->where('sexo', 'Masculino')->count();
        $alto_7074F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [70, 74])->where('sexo', 'Femenino')->count();
        $alto_7579M = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [75, 79])->where('sexo', 'Masculino')->count();
        $alto_7579F = Paciente::all()->where('riesgo_cv', 'ALTO')->whereBetween('grupo', [75, 79])->where('sexo', 'Femenino')->count();
        $alto_80M = Paciente::all()->where('riesgo_cv', 'ALTO')->where('grupo', '>=', 80)->where('sexo', 'Masculino')->count();
        $alto_80F = Paciente::all()->where('riesgo_cv', 'ALTO')->where('grupo', '>=', 80)->where('sexo', 'Femenino')->count();

        return view(
            'estadisticas.index',
            compact('all', 'total_pscv', 'm_pscv', 'f_pscv', 'p_bajo', 'p_moderado', 'p_alto', 'p_bajoM', 'p_bajoF', 'p_moderadoM', 'p_moderadoF', 'p_altoM', 'p_altoF', 'hta', 'dm2', 'dlp', 'htaF', 'htaM', 'dm2M', 'dm2F', 'dlpM', 'dlpF', 'iam', 'iamM', 'iamF', 'acv', 'acvF', 'acvM', 's_erc', 's_ercM', 's_ercF', 'ercI_II', 'ercI_IIF', 'ercI_IIM', 'ercIIIa', 'ercIIIaF', 'ercIIIaM', 'ercIIIb', 'ercIIIbF', 'ercIIIbM', 'ercIV', 'ercIVF', 'ercIVM', 'ercV', 'ercVF', 'ercVM', 'pscv_1519M', 'pscv_1519F', 'pscv_2024M', 'pscv_2024F', 'pscv_2529M', 'pscv_2529F', 'pscv_3034M', 'pscv_3034F', 'pscv_3539M', 'pscv_3539F', 'pscv_4044M', 'pscv_4044F', 'pscv_4549M', 'pscv_4549F', 'pscv_5054M', 'pscv_5054F', 'pscv_5559M', 'pscv_5559F', 'pscv_6064M', 'pscv_6064F', 'pscv_6569M', 'pscv_6569F', 'pscv_7074M', 'pscv_7074F', 'pscv_7579M', 'pscv_7579F', 'pscv_80M', 'pscv_80F', 'bajo_1519M', 'bajo_1519F', 'bajo_2024M', 'bajo_2024F', 'bajo_2529M', 'bajo_2529F', 'bajo_3034M', 'bajo_3034F', 'bajo_3539M', 'bajo_3539F', 'bajo_4044M', 'bajo_4044F', 'bajo_4549M', 'bajo_4549F', 'bajo_5054M', 'bajo_5054F', 'bajo_5559M', 'bajo_5559F', 'bajo_6064M', 'bajo_6064F', 'bajo_6569M', 'bajo_6569F', 'bajo_7074M', 'bajo_7074F', 'bajo_7579M', 'bajo_7579F', 'bajo_80M', 'bajo_80F', 'mod_1519M', 'mod_1519F', 'mod_2024M', 'mod_2024F', 'mod_2529M', 'mod_2529F', 'mod_3034M', 'mod_3034F', 'mod_3539M', 'mod_3539F', 'mod_4044M', 'mod_4044F', 'mod_4549M', 'mod_4549F', 'mod_5054M', 'mod_5054F', 'mod_5559M', 'mod_5559F', 'mod_6064M', 'mod_6064F', 'mod_6569M', 'mod_6569F', 'mod_7074M', 'mod_7074F', 'mod_7579M', 'mod_7579F', 'mod_80M', 'mod_80F', 'alto_1519M', 'alto_1519F', 'alto_2024M', 'alto_2024F', 'alto_2529M', 'alto_2529F', 'alto_3034M', 'alto_3034F', 'alto_3539M', 'alto_3539F', 'alto_4044M', 'alto_4044F', 'alto_4549M', 'alto_4549F', 'alto_5054M', 'alto_5054F', 'alto_5559M', 'alto_5559F', 'alto_6064M', 'alto_6064F', 'alto_6569M', 'alto_6569F', 'alto_7074M', 'alto_7074F', 'alto_7579M', 'alto_7579F', 'alto_80M', 'alto_80F', 'hta_1519M', 'hta_1519F', 'hta_2024M', 'hta_2024F', 'hta_2529M', 'hta_2529F', 'hta_3034M', 'hta_3034F', 'hta_3539M', 'hta_3539F', 'hta_4044M', 'hta_4044F', 'hta_4549M', 'hta_4549F', 'hta_5054M', 'hta_5054F', 'hta_5559M', 'hta_5559F', 'hta_6064M', 'hta_6064F', 'hta_6569M', 'hta_6569F', 'hta_7074M', 'hta_7074F', 'hta_7579M', 'hta_7579F', 'hta_80M', 'hta_80F')
        );
    }
}
