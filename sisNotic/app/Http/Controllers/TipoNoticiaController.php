<?php

namespace App\Http\Controllers;

use App\TipoNoticia;
use Illuminate\Http\Request;

class TipoNoticiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $base = $this->index2json();
        dd($base);
    }
    public function index2json()
    {
        $base = TipoNoticia::all();
        return json_encode($base);
    }
    public function show2json($id)
    {
        $base = TipoNoticia::find($id);
        return json_encode($base);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $linha = new TipoNoticia();
        $linha->jornalista = $request->input('jornalista');
        $linha->descricao = $request->input('descricao');
        $linha->save();
        return json_encode($linha);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TipoNoticia  $tipoNoticia
     * @return \Illuminate\Http\Response
     */
    public function show(TipoNoticia $tipoNoticia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TipoNoticia  $tipoNoticia
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoNoticia $tipoNoticia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TipoNoticia  $tipoNoticia
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $row = TipoNoticia::find($id);
        if (isset($row)) {
            $row->jornalista = $request->input('jornalista');
            $row->descricao = $request->input('descricao');
            $row->save();
            // return response('OK', 200);
            return json_encode($row);
        }
        return response('Tipo de noticia inexistente', 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoNoticia  $tipoNoticia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = TipoNoticia::find($id);
        if (isset($row)) {
            $row->delete();
            return response('OK', 200);
        }
        return response('Tipo de noticia inexistente', 404);
    }
}
