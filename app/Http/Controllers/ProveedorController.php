<?php

namespace MultiEmpresa\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Validator;
use Response;
use MultiEmpresa\Proveedor;
use MultiEmpresa\Contacto;
use MultiEmpresa\Banco;
use MultiEmpresa\Sucursal;
use MultiEmpresa\ProveedorContacto;
use MultiEmpresa\ProveedorBanco;
use MultiEmpresa\ProveedorSucursal;
use View;



class ProveedorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $proveedores = Proveedor::all();
         //die(var_dump($proveedores));

       return view('proveedores.index', ['proveedores' => $proveedores]);
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('proveedores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //truble w validations
        //$this->validate($request,[ 'razon-social'=>'required', 'identificacion'=>'required']);
//        Proveedor::create($request->all());

        $proveedor = new Proveedor;
        $proveedor->identificacion = $request->identificacion;
        $proveedor->razon_social = $request->razon_social;
        $proveedor->activo = $request->activo;
        $proveedor->website = $request->website;
        $proveedor->save();

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

        $banco = new Banco;
        $banco->nombre = $request->nombre;
        $banco->cta_cte_s = $request->cta_cte_s;
        $banco->cta_cte_us = $request->cta_cte_us;
        $banco->limite_credito = $request->limite_credito;
        $banco->dia_credito = $request->dia_credito;
        $banco->save();

        $sucursal = new Sucursal;
        $sucursal->direccion = $request->direccion ;
        $sucursal->distrito = $request->distrito ;
        $sucursal->provincia = $request->provincia ;
        $sucursal->pais = $request->pais ;
        $sucursal->telefono = $request->telefono ;
        $sucursal->principal = $request->principal ;
        $sucursal->save();

        $proveedorSucursal = new ProveedorSucursal();
        $proveedorSucursal->proveedor_id = $proveedor->id;
        $proveedorSucursal->sucursal_id = $sucursal->id;
        $proveedorSucursal->save();


        $proveedorBanco = new ProveedorBanco();
        $proveedorBanco->proveedor_id = $proveedor->id;
        $proveedorBanco->banco_id = $banco->id;
        $proveedorBanco->save();

        $proveedorContacto = new ProveedorContacto();
        $proveedorContacto->proveedor_id = $proveedor->id;
        $proveedorContacto->contacto_id = $contacto->id;
        $proveedorContacto->save();

        
        return redirect()->route('proveedor.index')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     $proveedor = Proveedor::findOrFail($id);

     

     return view('proveedores.show', ['proveedor' => $proveedor]);
 }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $proveedor = Proveedor::findOrFail($id);

        return view('proveedores.edit', ['proveedor' => $proveedor]);
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
        Proveedor::find($id)->update($request->all());
        return redirect()->route('proveedor.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Proveedor::findOrFail($id)->delete();
        return redirect()->route('proveedor.index')->with('success','Registro eliminado satisfactoriamente');
    }



      public function consulta(Request $request)
    {


        $ruta = "https://ruc.com.pe/api/beta/ruc";

        $token = "a2f8caf2-482a-4025-aa06-a24abeee1b4d-00eaf510-44bf-4205-84aa-44ddaac2eb8e";

        $rucaconsultar = $request->identificacion;
        

        $data = array(
            "token" => $token,
            "ruc"   => $rucaconsultar
        );

        $data_json = json_encode($data);
 
// Invocamos el servicio a ruc.com.pe
// Ejemplo para JSON
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $ruta);
        curl_setopt(
            $ch, CURLOPT_HTTPHEADER, array(
                'Content-Type: application/json',
            )
        );
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_POSTFIELDS,$data_json);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $respuesta  = curl_exec($ch);
        curl_close($ch);

        $leer_respuesta = json_decode($respuesta, true);
        

      

        if (isset($leer_respuesta['errors'])) {
    //Mostramos los errores si los hay
            return $leer_respuesta['errors'];
        } else {
    //Mostramos la respuesta
            return($leer_respuesta);
        }

    }




}
