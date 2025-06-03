<?php

namespace App\Http\Controllers;

use App\Familia;
use App\Evaluacion;
use Illuminate\Http\Request;
use Carbon\Carbon;

class EstadisticaController extends Controller
{
    public function index()
    {
        return view('estadisticas.index');
    }

    public function seccionA1()
    {
        $familias = Familia::with('pacientes')->get();

        $familiasConEvaluacion = Familia::with('ultimaEvaluacion')
            ->whereHas('ultimaEvaluacion', function ($q) {
                $q->whereNotNull('fecha_evaluacion');
            })
            ->get();

        // Familias con plan de intervención activo
        $familiasConPlan = Familia::with('planes')
            ->whereHas('planes', function ($q) {
                $q->whereNotNull('fecha_ingreso');
            })
            ->get();

        // Familias con plan de intervención egresado
        $familiasConEgreso = Familia::with(['planes' => function ($q) {
            $q->whereNotNull('fecha_egreso');
        }])
            ->whereHas('planes', function ($q) {
                $q->whereNotNull('fecha_egreso');
            })
            ->get();

        // Familias sin plan de intervención activo pero con evaluación
        $familiasSinPlanConEvaluacion = Familia::with('ultimaEvaluacion')
            ->whereDoesntHave('planes', function ($q) {
                $q->whereNull('fecha_ingreso');
            })
            ->whereHas('ultimaEvaluacion')
            ->get();

        return view('estadisticas.seccionA1', compact(
            'familiasConPlan',
            'familiasSinPlanConEvaluacion',
            'familiasConEgreso',
            'familias',
            'familiasConEvaluacion'
        ));
    }
}
