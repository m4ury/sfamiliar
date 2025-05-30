<?php

namespace App\Http\Controllers;

use App\Plan;
use App\Familia;
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
    public function create(Familia $familia)
    {
        $plan = new Plan();

        return view('planes.create', compact('familia', 'plan'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePlanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StorePlanRequest $request, Familia $familia)
    {
        $data = $request->validated();
        $data['familia_id'] = $familia->id;
        $data['ingreso_plan'] = $request->ingreso_plan ? true : false;

        Plan::create($data);

        return redirect()->route('familias.show', $familia->id)->withSuccess('Plan creado con éxito!');
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
     * @param  \App\Plan  $plane
     * @return \Illuminate\Http\Response
     */
    public function edit(Familia $familia, Plan $plane)
    {
        //dd($familia, $plane);
        return view('planes.edit', ['familia' => $familia, 'plan' => $plane]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePlanRequest  $request
     * @param  \App\Plan  $plan
     * @return \Illuminate\Http\Response
     */
    public function update(UpdatePlanRequest $request, Familia $familia, Plan $plane)
    {
        $plane->update($request->all());
        $plane->ingreso_plan = $request->ingreso_plan ? 1 : false;
        $plane->save();

        return redirect('familias/' . $plane->familia_id)->withSuccess('Plan actualizado con éxito!');
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
