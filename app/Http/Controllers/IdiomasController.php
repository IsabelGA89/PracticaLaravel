<?php

namespace App\Http\Controllers;

use App\Idiomas;
use Illuminate\Http\Request;

class IdiomasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $idio = Idiomas::all();
        return view("idiomas.listado_idiomas",["idio"=>$idio]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("idiomas.create");
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
            'idioma' => 'required',
            'codigo' => 'required',

        ]);
        try{
            $idioma = new Idiomas();
            $idioma->idioma = $request->idioma;
            $idioma->codigo = $request->codigo;

            $idioma->save();
            return redirect()->route("idiomas.index")
                ->with('success','Se ha creado el nuevo idioma');
        }
        catch(\Exception $e){
            return redirect()->route("idiomas.index")
                ->with('error','Se ha producido un error guardando el idioma.');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Idiomas  $idiomas
     * @return \Illuminate\Http\Response
     */
    public function show(Idiomas $idiomas)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Idiomas  $idiomas
     * @return \Illuminate\Http\Response
     */
    public function edit(Idiomas $idiomas)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Idiomas  $idiomas
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Idiomas $idiomas)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Idiomas  $idiomas
     * @return \Illuminate\Http\Response
     */
    public function destroy(Idiomas $idiomas)
    {
        //
    }
}
