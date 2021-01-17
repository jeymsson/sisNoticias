<?php

namespace App\Http\Controllers;

use App\Noticia;
use Illuminate\Http\Request;

class NoticiaController extends Controller
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
        $base = Noticia::all();
        return json_encode($base);
    }
    public function show2json($id)
    {
        $base = Noticia::find($id);
        return json_encode($base);
    }
    public function showMe2json()
    {
        // return response('NAO IMPLEMENTADO', 424);
        $id = 2;
        $base = Noticia::where('jornalista', '=', $id)->get();
        return json_encode($base);
    }
    public function showty2json($id)
    {
        // return response('NAO IMPLEMENTADO', 424);
        $base = Noticia::where('tipo', '=', $id)->get();
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
        if(!empty($row->jornalista) &&
        !empty($row->tipo) &&
        !empty($row->titulo) &&
        !empty($row->descricao) &&
        !empty($row->corpon)){
            $linha = new Noticia();
            $linha->jornalista = $request->input('jornalista');
            $linha->tipo = $request->input('tipo');
            $linha->titulo = $request->input('titulo');
            $linha->descricao = $request->input('descricao');
            $linha->corpon = $request->input('corpon');
            $linha->link = $request->input('link');
            $linha->save();
            return json_encode($linha);
        } else {
            return response('Campos obrigatorios nao preenchidos.', 404);
        }
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
        $row = Noticia::find($id);
        if (isset($row)) {
            if(!empty($row->jornalista) &&
            !empty($row->tipo) &&
            !empty($row->titulo) &&
            !empty($row->descricao) &&
            !empty($row->corpon)){
                $row->jornalista = $request->input('jornalista');
                $row->tipo = $request->input('tipo');
                $row->titulo = $request->input('titulo');
                $row->descricao = $request->input('descricao');
                $row->corpon = $request->input('corpon');
                $row->link = $request->input('link');
                $row->save();
                // return response('OK', 200);
                return json_encode($row);
            } else {
                return response('Campos obrigatorios nao preenchidos.', 404);
            }
        }
        return response('Noticia inexistente', 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TipoNoticia  $tipoNoticia
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Noticia::find($id);
        if (isset($row)) {
            $row->delete();
            return response('OK', 200);
        }
        return response('Noticia inexistente', 404);
    }
}
