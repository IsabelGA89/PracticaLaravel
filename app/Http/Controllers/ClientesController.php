<?php

namespace App\Http\Controllers;

use App\Clientes;
use Illuminate\Http\Request;

class ClientesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cli = Clientes::all();
        return view("clientes.listado_clientes",["cli"=>$cli]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("clientes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'email' => 'required',

        ]);
        try{
            $cli = new Clientes();
            $cli->nombre = $request->nombre;
            $cli->direccion = $request->direccion;
            $cli->email = $request->email;

            $cli->save();
            return redirect()->route("clientes.index")
                ->with('success','Se ha creado el nuevo cliente');
        }
        catch(\Exception $e){
            return redirect()->route("clinetes.index")
                ->with('error','Se ha producido un error guardando el cliente.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function show(Clientes $clientes)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cliente = Clientes::findOrFail($id);
        return view('clientes.edit',["cliente"=>$cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $datosCliente = request()->except(['_token','_method']);
        Clientes::where('id','=',$id)->update($datosCliente);
        $cliente = Clientes::findOrFail($id);
        return view("facturas.edit",["cliente"=>$cliente])->with('success','Se han actualizado los datos del cliente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Clientes  $clientes
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Clientes::destroy($id);
        return redirect()->route('clientes.index')
            ->with('success',"El cliente $id se ha eliminado satisfactoriamente");
    }
}
