<?php

namespace MultiEmpresa\Http\Controllers;

use Illuminate\Http\Request;
use MultiEmpresa\Item;
use MultiEmpresa\Medida;
use MultiEmpresa\Linea_negocio;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Item::all();

        return view('Items.index', ['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('items.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linea_negocio = new Linea_negocio();
        $linea_negocio->linea_negocio = $request->linea_negocio;
        $linea_negocio->save();
  

        $medida = new Medida();
        $medida->unidad = $request->unidad;
        $medida->detalle = $request->detalle_medida;
        $medida->save();


        $item = new Item();
        $item->tipo = $request->tipo ;
        $item->marca = $request->marca ;
        $item->familia = $request->familia ;
        $item->codigo = $request->codigo ;
        $item->descripcion = $request->descripcion ;
        $item->peso = $request->peso ;
        $item->precio = $request->precio ;


/*
        die(var_dump($request->hasFile('imagen')));
        if ($request->hasFile('photo')) {
    //
}
   
        $fileName = md5(rand(1,999999)) . '.' . 
        $request->file('imagen')->getClientOriginalExtension();

        $request->file('imagen')->move(
            base_path() . '/public/uploads', $fileName
        ); 

        */
        $item->imagen = $request->imagen;
      


        $item->detalle = $request->detalle ;
        $item->importado = $request->importado ? "IMPORTADO" : "NO IMPORTADO" ;
        $item->condicion = $request->condicion ;
        $item->cantidad_disponible = $request->cantidad_disponible ;
        $item->stock_min = $request->stock_min ;
        $item->stock_max = $request->stock_max ;
        $item->numero_serie = $request->numero_serie ;
        $item->medida_id = $medida->id ;
        $item->linea_negocio_id = $linea_negocio->id ;
            
        $item->save();

        return redirect()->route('item.index')->with('success','Registro creado satisfactoriamente');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $item = Item::findOrFail($id);

     

     return view('Items.show', ['item' => $item]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = Item::findOrFail($id);

        return view('Items.edit', ['item' => $item]);
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
        Item::find($id)->update($request->all());
        return redirect()->route('item.index')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Item::findOrFail($id)->delete();
        return redirect()->route('Item.index')->with('success','Registro eliminado satisfactoriamente');
    }

    public function codigo(){


        return $item = Item::all()->last();
    }
}
