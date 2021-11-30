<?php

namespace App\Http\Controllers;

use App\Turno;
use App\Medico;
use App\Paciente;
use Illuminate\Http\Request;

class TurnoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $turnos = Turno::all();
        return view('turnos.list', compact('turnos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $medicos = Medico::all();
        $pacientes = Paciente::all();

        return view('turnos.create', compact('medicos', 'pacientes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $turno = new Turno();

        $turno->id_medico = $request->id_medico;
        $turno->id_paciente = $request->id_paciente;
        $turno->fecha = $request->fecha;
        $turno->hora = $request->hora;

        $turno->save();

        return redirect('/turnos');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function show(Turno $turno)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $turno = Turno::findOrFail($id);
        $medicos = Medico::all();
        $pacientes = Paciente::all();
        return view('turnos.edit', compact('turno', 'medicos', 'pacientes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $turno = Turno::findOrFail($id);

        $turno->id_medico = $request->id_medico;
        $turno->id_paciente = $request->id_paciente;
        $turno->fecha = $request->fecha;
        $turno->hora = $request->hora;

        $turno->save();

        return redirect('/turnos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Turno  $turno
     * @return \Illuminate\Http\Response
     */
    public function destroy(Turno $turno)
    {
        //
    }
}
