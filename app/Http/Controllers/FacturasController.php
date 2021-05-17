<?php

namespace App\Http\Controllers;

use App\facturas;
use Illuminate\Http\Request;

class FacturasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fras = facturas::all();
        return view("facturas.listado_facturas",["fras"=>$fras]);
       // return view('facturas.facturas');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view("facturas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$fra = $request->input();
        //dd($fra); para imprimirlo y die
        $request->validate([
            'empresa' => 'required',
            'producto' => 'required',
            'unidades' => 'required',
            'total' => 'required',
            'impuesto' => 'required'

        ]);
        try{
            $fra = new facturas;
            $fra->empresa = $request->empresa;
            $fra->producto = $request->producto;
            $fra->unidades = $request->unidades;
            $fra->total = $request->total;
            $fra->impuesto = $request->impuesto;
            $fra->save();
            return redirect()->route("facturas.index")
                ->with('success','Se ha creado la nueva factura');
        }
        catch(\Exception $e){
            return redirect()->route("facturas.index")
                ->with('error','Se ha producido un error guardando la factura.');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function show(facturas $facturas)
    {
        //
        //return view('facturas.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function edit(facturas $facturas)
    {
        return view('facturas.edit',compact('facturas'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, facturas $facturas)
    {
        $request->validate([
            'empresa' => 'required',
            'producto' => 'required',
            'unidades' => 'required',
            'total' => 'required',
            'impuesto' => 'required'

        ]);
        try{
            $facturas->update($request->all());
            return redirect()->route("facturas.index")
                ->with('success','Se ha actualizado el valor de la factura');
        }
        catch(\Exception $e){
            return redirect()->route("facturas.index")
                ->with('error','Se ha producido un error actualizando la factura.');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\facturas  $facturas
     * @return \Illuminate\Http\Response
     */
    public function destroy(facturas $facturas)
    {
        try{
            $fra_id = $facturas->id;
            $facturas->delete();
            return redirect()->route('facturas.index')
                ->with('success',"La factura $fra_id se ha eliminado satisfactoriamente");
        }
        catch(\Exception $e){
            return redirect()->route('facturas.index')
                ->with('error','La factura no ha podido ser eliminada');
        }

    }
}
