<?php

namespace MultiEmpresa\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use MultiEmpresa\Proveedor;
use MultiEmpresa\Contacto;
use MultiEmpresa\Cliente;;
use MultiEmpresa\ProveedorContacto;
use MultiEmpresa\ClienteContacto;

use View;

class ContactoController extends Controller
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
    public function create($id, $tipo)
    {
        $tipo = $request->tipo;
        $id = $request->id;
        return die(var_dump($tipo, $id));
        if ($tipo == "PROVEEDOR") {
            $proveedor = Proveedor::findOrFail($id);
            $proveedorContacto = new ProveedorContacto();
            $proveedorContacto->proveedor_id = $proveedor->id;
            $proveedorContacto->contacto_id = $contacto->id;
            $proveedorContacto->save();
            }else{

            }

        return view('Contactos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
