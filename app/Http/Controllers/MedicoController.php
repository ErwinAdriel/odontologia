<?php

namespace App\Http\Controllers;

use App\Medico;
use App\Especialidad;
use App\Cargo;
use Illuminate\Http\Request;

class MedicoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicos = Medico::all();
        return view('medicos.list', compact('medicos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $especialidades = Especialidad::all();
        $cargos = Cargo::all();
        
        return view('medicos.create', compact('especialidades', 'cargos'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $medico = new Medico();

        $medico->dni = $request->dni;
        $medico->nombre = $request->nombre;
        $medico->apellido = $request->apellido;
        $medico->id_especialidad = $request->id_especialidad;
        $medico->nro_colegiado = $request->nro_colegiado;
        $medico->id_cargo = $request->id_cargo;

        $medico->save();

        return redirect('/medicos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function show(Medico $medico)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $medico = Medico::findOrFail($id);
        $especialidades = Especialidad::all();
        $cargos = Cargo::all();
        return view('medicos.edit', compact('medico', 'especialidades', 'cargos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medico = Medico::findOrFail($id);

        $medico->dni = $request->dni;
        $medico->nombre = $request->nombre;
        $medico->apellido = $request->apellido;
        $medico->apellido = $request->apellido;
        $medico->id_especialidad = $request->id_especialidad;
        $medico->nro_colegiado = $request->nro_colegiado;
        $medico->id_cargo = $request->id_cargo;

        $medico->save();

        return redirect('/medicos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medico  $medico
     * @return \Illuminate\Http\Response
     */
    public function destroy(Medico $medico)
    {
        //
    }
}
