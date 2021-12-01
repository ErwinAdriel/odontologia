<?php

namespace App\Http\Controllers;

use App\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes.list', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $paciente = new Paciente();

        $paciente->dni = $request->dni;
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->domicilio = $request->domicilio;
        $paciente->telefono = $request->telefono;
        $paciente->historia_clinica = $request->historia_clinica;
        $paciente->fecha_de_nacimiento = $request->fecha_de_nacimiento;
        $paciente->genero = $request->genero;

        $paciente->save();

        return redirect('/pacientes');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paciente = Paciente::findOrFail($id);
        return view('pacientes.edit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paciente = Paciente::findOrFail($id);

        $paciente->dni = $request->dni;
        $paciente->nombre = $request->nombre;
        $paciente->apellido = $request->apellido;
        $paciente->domicilio = $request->domicilio;
        $paciente->telefono = $request->telefono;
        $paciente->historia_clinica = $request->historia_clinica;
        $paciente->fecha_de_nacimiento = $request->fecha_de_nacimiento;

        $paciente->save();

        return redirect('/pacientes');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paciente = Paciente::findOrFail($id);
        $paciente->delete();

        return $paciente;
    }
}
