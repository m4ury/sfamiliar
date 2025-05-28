<?php

namespace App\Http\Controllers;

use App\Plan;
use App\Http\Requests\StorePlanRequest;
use App\Http\Requests\UpdatePlanRequest;

class PlanController extends Controller
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
        $familia = \App\Familia::findOrFail($id);
        $plan = new Plan();

        return view('planes.create', compact('plan', 'familia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanRequest $request)
    {
        $plan = Plan::create($request->validated());
        $plan->familia()->associate($request->input('familia_id'));
        $plan->ingreso_plan = $request->ingreso_plan ? true : false;
        if ($request->egreso_plan && $request->egreso_plan == '1') {
            $plan->egreso_plan = true;
            $plan->ingreso_plan = null;
            $plan->tipo_plan = null;
        }
        $plan->save();

        return redirect('familias/' . $plan->familia_id)->withSuccess('Plan creado con exito!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function show(Plan $plan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function edit(Plan $plan)
    {
        $familia = $plan->familia;

        return view('planes.edit', compact('plan', 'familia'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlanRequest  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlanRequest $request, Plan $plan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Plan $plan)
    {
        //
    }
}
