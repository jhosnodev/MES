<?php

namespace MultiEmpresa\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use MultiEmpresa\Equipo;
use MultiEmpresa\Medida;
use View;


class EquipoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $equipos = Equipo::all();

        return view('Equipos.index', ['equipos' => $equipos]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Equipos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $equipo = new Equipo();
        $equipo->marca = $request->marca;
        $equipo->familia = $request->familia;
        $equipo->descripcion = $request->descripcion;
        $equipo->precio = $request->precio;
        $equipo->imagen = $request->imagen;
        $equipo->detalle = $request->detalle;
        $equipo->importado = $request->importado;
        $equipo->condicion = $request->condicion;
        $equipo->cantidad_disponible = $request->cantidad_disponible;
        $equipo->numero_serie = $request->numero_serie;
        

        $equipo->save();
        return redirect()->route('Equipo.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
           $equipos = Equipo::findOrFail($id);

     

     return view('equipos.show', ['equipos' => $equipos]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $equipos = Equipo::findOrFail($id);

        return view('equipos.edit', ['equipos' => $equipos]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        Equipo::find($id)->update($request->all());
        return redirect()->route('Equipo.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Equipo::findOrFail($id)->delete();
        return redirect()->route('Equipo.index')->with('success','Registro eliminado satisfactoriamente');
    }
}
