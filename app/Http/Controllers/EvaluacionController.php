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
        $eval = new Evaluacion;
        $factor = new Factor;

        return view('evaluaciones.create', compact('familia', 'eval'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validar que al menos uno de cada sección esté seleccionado
        $bajoSeleccionados = collect([
            $request->fBajo_1,
            $request->fBajo_2,
            $request->fBajo_3,
            $request->fBajo_4
        ])->filter()->count();

        $intermedioSeleccionados = collect([
            $request->fIntermedio_1,
            $request->fIntermedio_2,
            $request->fIntermedio_3,
            $request->fIntermedio_4,
            $request->fIntermedio_5,
            $request->fIntermedio_6,
            $request->fIntermedio_7,
            $request->fIntermedio_8,
            $request->fIntermedio_9,
            $request->fIntermedio_10,
            $request->fIntermedio_11
        ])->filter()->count();

        $altoSeleccionados = collect([
            $request->fAlto_1,
            $request->fAlto_2,
            $request->fAlto_3,
            $request->fAlto_4,
            $request->fAlto_5,
            $request->fAlto_6,
            $request->fAlto_7,
            $request->fAlto_8,
            $request->fAlto_9,
            $request->fAlto_10,
            $request->fAlto_11
        ])->filter()->count();

        if ($bajoSeleccionados == 0 || $intermedioSeleccionados == 0 || $altoSeleccionados == 0) {
            return back()->withErrors('Debe seleccionar al menos un factor en cada sección (Bajo, Intermedio y Alto).')->withInput();
        }

        // Guardar la evaluación
        $eval = new Evaluacion($request->except(['_token', 'nombre']));
        $eval->fecha_evaluacion = $request->fecha_evaluacion;
        $eval->familia_id = $request->familia_id;
        $eval->save();

        // Guardar los factores
        $factor = new Factor($request->except('_token'));

        // Asignar valores individuales
        $factor->fBajo_1 = $request->fBajo_1 ? 1 : 0;
        $factor->fBajo_2 = $request->fBajo_2 ? 1 : 0;
        $factor->fBajo_3 = $request->fBajo_3 ? 1 : 0;
        $factor->fBajo_4 = $request->fBajo_4 ? 1 : 0;

        $factor->fIntermedio_1 = $request->fIntermedio_1 ? 2 : 0;
        $factor->fIntermedio_2 = $request->fIntermedio_2 ? 2 : 0;
        $factor->fIntermedio_3 = $request->fIntermedio_3 ? 2 : 0;
        $factor->fIntermedio_4 = $request->fIntermedio_4 ? 2 : 0;
        $factor->fIntermedio_5 = $request->fIntermedio_5 ? 2 : 0;
        $factor->fIntermedio_6 = $request->fIntermedio_6 ? 2 : 0;
        $factor->fIntermedio_7 = $request->fIntermedio_7 ? 2 : 0;
        $factor->fIntermedio_8 = $request->fIntermedio_8 ? 2 : 0;
        $factor->fIntermedio_9 = $request->fIntermedio_9 ? 2 : 0;
        $factor->fIntermedio_10 = $request->fIntermedio_10 ? 2 : 0;
        $factor->fIntermedio_11 = $request->fIntermedio_11 ? 2 : 0;

        $factor->fAlto_1 = $request->fAlto_1 ? 3 : 0;
        $factor->fAlto_2 = $request->fAlto_2 ? 3 : 0;
        $factor->fAlto_3 = $request->fAlto_3 ? 3 : 0;
        $factor->fAlto_4 = $request->fAlto_4 ? 3 : 0;
        $factor->fAlto_5 = $request->fAlto_5 ? 3 : 0;
        $factor->fAlto_6 = $request->fAlto_6 ? 3 : 0;
        $factor->fAlto_7 = $request->fAlto_7 ? 3 : 0;
        $factor->fAlto_8 = $request->fAlto_8 ? 3 : 0;
        $factor->fAlto_9 = $request->fAlto_9 ? 3 : 0;
        $factor->fAlto_10 = $request->fAlto_10 ? 3 : 0;
        $factor->fAlto_11 = $request->fAlto_11 ? 3 : 0;

        // Sumar y asignar los puntajes por sección
        $factor->fBajo_puntaje = $factor->fBajo_1 + $factor->fBajo_2 + $factor->fBajo_3 + $factor->fBajo_4;
        $factor->fIntermedio_puntaje = $factor->fIntermedio_1 + $factor->fIntermedio_2 + $factor->fIntermedio_3 +
            $factor->fIntermedio_4 + $factor->fIntermedio_5 + $factor->fIntermedio_6 + $factor->fIntermedio_7 +
            $factor->fIntermedio_8 + $factor->fIntermedio_9 + $factor->fIntermedio_10 + $factor->fIntermedio_11;
        $factor->fAlto_puntaje = $factor->fAlto_1 + $factor->fAlto_2 + $factor->fAlto_3 + $factor->fAlto_4 +
            $factor->fAlto_5 + $factor->fAlto_6 + $factor->fAlto_7 + $factor->fAlto_8 + $factor->fAlto_9 +
            $factor->fAlto_10 + $factor->fAlto_11;

        // Sumar el puntaje total
        $puntajeTotal = $factor->fBajo_puntaje + $factor->fIntermedio_puntaje + $factor->fAlto_puntaje;
        $factor->puntaje = $puntajeTotal;

        // Asociar el factor a la evaluación
        $factor->evaluacion_id = $eval->id;
        $factor->save();

        // Guardar el nivel de riesgo en la evaluación según el puntaje total
        if ($puntajeTotal >= 0 && $puntajeTotal <= 9) {
            $eval->resultado_evaluacion = 'Bajo';
        } elseif ($puntajeTotal >= 10 && $puntajeTotal <= 19) {
            $eval->resultado_evaluacion = 'Medio';
        } else {
            $eval->resultado_evaluacion = 'Alto';
        }
        $eval->save();

        return redirect('familias/' . $eval->familia->id)->withSuccess('Evaluacion creada con exito!');
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
    public function edit(Evaluacion $evaluacion)
    {
        $familia = $evaluacion->familia;
        $factor = $evaluacion->factor;
        $evaluacion = Evaluacion::findOrFail($evaluacion->id);

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
        $familia = Familia::findOrFail($evaluacion->familia_id);
        $evaluacion->update($request->all());
        $evaluacion->save();

        return redirect('familias/' . $request->familia_id)->withSuccess('Familia actualizado con exito!');
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
