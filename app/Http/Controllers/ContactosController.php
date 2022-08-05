<?php

namespace App\Http\Controllers;

use App\Models\contactos;
use Illuminate\Http\Request;

class ContactosController extends Controller
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
    public function create()
    {
        return view('contactos.criar-c');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(contactos::where('nome', $request->nome))
            contactos::create([
                "nome" => $request->nome,
                "email" => $request->email,
                "mensagem" => $request->mensagem
            ]);
            return redirect()
                            ->route('contactos.criar-c')
                            ->with('success', 'Inserido com sucesso!');

            return redirect()
                            ->route('contactos.criar-c')
                            ->with('error', 'Falha ao inserir');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function show(contactos $contactos)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function edit(contactos $contactos)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, contactos $contactos)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contactos  $contactos
     * @return \Illuminate\Http\Response
     */
    public function destroy(contactos $contactos)
    {
        //
    }
}
