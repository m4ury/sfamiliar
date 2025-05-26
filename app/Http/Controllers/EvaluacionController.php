<?php

namespace App\Http\Controllers;

use App\Factor;
use App\Familia;
use App\Evaluacion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EvaluacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function crea($id)
    {
        $familia = Familia::findOrFail($id);
        $evaluacion = new Evaluacion;
        $factor = new Factor;

        return view('evaluaciones.create', compact('familia', 'evaluacion', 'factor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fecha_evaluacion' => 'required|date|before_or_equal:today',
        ]);

        $eval = new Evaluacion([
            'fecha_evaluacion' => $request->fecha_evaluacion,
            'familia_id' => $request->familia_id,
            'observacion' => $request->observacion,
        ]);
        $eval->save();

        $factor = new Factor();
        $niveles = ['fBajo' => [1, 4, 1], 'fIntermedio' => [1, 11, 2], 'fAlto' => [1, 10, 3], 'fProtect' => [1, 11, 1]];

        foreach ($niveles as $grupo => [$inicio, $fin, $valor]) {
            for ($i = $inicio; $i <= $fin; $i++) {
                $campo = "{$grupo}_{$i}";
                $factor->$campo = $request->has($campo) ? $valor : 0;
            }
        }

        $factor->fBajo_puntaje = collect(range(1, 4))->sum(fn($i) => $factor->{"fBajo_$i"});
        $factor->fIntermedio_puntaje = collect(range(1, 11))->sum(fn($i) => $factor->{"fIntermedio_$i"});
        $factor->fAlto_puntaje = collect(range(1, 11))->sum(fn($i) => $factor->{"fAlto_$i"});

        $factor->puntaje = $factor->fBajo_puntaje + $factor->fIntermedio_puntaje + $factor->fAlto_puntaje;
        //$factor->fProtect = $request->has('fProtect') ? 1 : 0;
        $factor->evaluacion_id = $eval->id;
        $factor->save();

        $eval->resultado_evaluacion = match (true) {
            $factor->puntaje <= 9 => 'Bajo',
            $factor->puntaje <= 19 => 'Medio',
            default => 'Alto',
        };
        $eval->save();

        return redirect('familias/' . $eval->familia_id)->withSuccess('Evaluación creada con éxito!');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function show(Evaluacion $evaluacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $evaluacion = Evaluacion::findOrFail($id);
        $familia = Familia::findOrFail($evaluacion->familia_id);
        $factor = Factor::where('evaluacion_id', $id)->first();

        return view('evaluaciones.edit', compact('familia', 'evaluacion', 'factor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Evaluacion $evaluacion)
    {
        $evaluacion = Evaluacion::findOrFail($request->evaluacion_id);
        $evaluacion->update($request->all());

        $factor = Factor::where('id', $request->factor_id)->first();

        // Asignar valores correctos a cada factor según si está seleccionado
        $niveles = [
            'fBajo' => [1, 4, 1],
            'fIntermedio' => [1, 11, 2],
            'fAlto' => [1, 11, 3],
            'fProtect' => [1, 11, 1],
        ];

        foreach ($niveles as $grupo => [$inicio, $fin, $valor]) {
            for ($i = $inicio; $i <= $fin; $i++) {
                $campo = "{$grupo}_{$i}";
                $factor->$campo = $request->has($campo) ? $valor : 0;
            }
        }

        // Recalcular puntajes
        $factor->fBajo_puntaje = collect(range(1, 4))->sum(fn($i) => $factor->{"fBajo_$i"});
        $factor->fIntermedio_puntaje = collect(range(1, 11))->sum(fn($i) => $factor->{"fIntermedio_$i"});
        $factor->fAlto_puntaje = collect(range(1, 11))->sum(fn($i) => $factor->{"fAlto_$i"});

        $factor->puntaje = $factor->fBajo_puntaje + $factor->fIntermedio_puntaje + $factor->fAlto_puntaje;
        $factor->save();

        // Actualizar resultado de evaluación
        $evaluacion->resultado_evaluacion = match (true) {
            $factor->puntaje <= 9 => 'Bajo',
            $factor->puntaje <= 19 => 'Medio',
            default => 'Alto',
        };
        $evaluacion->save();

        return redirect()->route('familias.show', $request->familia_id)
            ->withSuccess('Evaluación actualizada con éxito!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Evaluacion  $evaluacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Evaluacion $evaluacion)
    {
        //
    }
}
