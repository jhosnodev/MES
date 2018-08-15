<?php

namespace MultiEmpresa\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use MultiEmpresa\Cliente;
use MultiEmpresa\Contacto;
use MultiEmpresa\Grupo;
use MultiEmpresa\Sucursal;
use MultiEmpresa\Actividad_economica;
use MultiEmpresa\ClienteContacto;
use MultiEmpresa\ClienteGrupo;
use MultiEmpresa\ClienteSucursal;
use View;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clientes = Cliente::all();
         //die(var_dump($proveedores));

       return view('Clientes.index', ['clientes' => $clientes]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Clientes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $grupo = new Grupo;
       $grupo->grupo = $request->grupo;
       $grupo->save();
  


       $actividad_economica = new Actividad_economica;
       $actividad_economica->actividad_economica = $request->actividad_economica_id;
       $actividad_economica->save();



       $cliente = new Cliente; 
       $cliente->identificacion = $request->identificacion;
       $cliente->razon_social = $request->razon_social;
       $cliente->ejecutivo_ventas_id = $request->ejecutivo_ventas_id;
       $cliente->estado = $request->estado;
       $cliente->actividad_economica_id = $actividad_economica->id;
       $cliente->save();

     
        $clienteGrupo = new ClienteGrupo();
        $clienteGrupo->cliente_id = $cliente->id;
        $clienteGrupo->grupo_id = $grupo->id;
        $clienteGrupo->save();


       $contacto = new Contacto;
        $contacto->persona = $request->persona;
        $contacto->correo = $request->correo;
        $contacto->telefono = $request->telefono;
        $contacto->cedula = $request->cedula;
        $contacto->dia_pago = $request->dia_pago;
        $contacto->hora_pago = $request->hora_pago;
        $contacto->cargo = $request->cargo;
        $contacto->website = $request->website;
        $contacto->limite_credito = $request->limite_credito;
        $contacto->dia_credito = $request->dia_credito;
        $contacto->dia_tolerancia = $request->dia_tolerancia;
        $contacto->observaciones = $request->observaciones;
        $contacto->save();


       $sucursal = new Sucursal();
       $sucursal->direccion = $request->direccion; 
       $sucursal->distrito = $request->distrito;
       $sucursal->provincia = $request->provincia;
       $sucursal->pais = $request->pais;
       $sucursal->telefono = $request->telefono;
       $sucursal->principal = $request->principal;
       $sucursal->save();


        $clienteSucursal = new clienteSucursal();
        $clienteSucursal->cliente_id = $cliente->id;
        $clienteSucursal->sucursal_id = $sucursal->id;
        $clienteSucursal->save();

        $clienteContacto = new ClienteContacto();
        $clienteContacto->cliente_id = $cliente->id;
        $clienteContacto->contacto_id = $contacto->id;
        $clienteContacto->save();
        return redirect()->route('cliente.index')->with('success','Registro guardado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cliente = Cliente::findOrFail($id);


        return view('Clientes.show', ['cliente' => $cliente]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Cliente::findOrFail($id);

        return view('clientes.edit', ['cliente' => $cliente]);
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
        Cliente::find($id)->update($request->all());
        return redirect()->route('cliente.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cliente::findOrFail($id)->delete();
        return redirect()->route('clientes.index')->with('success','Registro eliminado satisfactoriamente');
    }
    
}
