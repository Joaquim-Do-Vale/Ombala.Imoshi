<?php

namespace App\Http\Controllers;

use App\Models\novidades;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class NovidadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mostrar = DB::table('novidades')->join('users', 'users.id', '=', 'novidades.user_id')
                                         ->select('novidades.id', 'novidades.titulo', 'novidades.image', 'novidades.novidade_d', 'novidades.fonte_d')
                                         ->where('novidades.user_id', Auth::user()->id)->paginate(1);
        return view('novidades.listar-no', compact('mostrar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $create="ok";
        return view('novidades.criar-no',compact('create'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Image Upload

        if($request->image->isValid()){

            $nameFile = Str::of($request->titulo)->slug('-') . '.' . $request->image->getClientOriginalExtension();

            $image = $request->image->storeAs('novidades', $nameFile);
            $file = $image;

            novidades::create([
                "user_id" => Auth::user()->id,
                "titulo" => $request->titulo,
                "image" => $image,
                "novidade_d" => $request->novidade_d,
                "fonte_d" => $request->fonte_d
            ]);


            return redirect()
                                ->route('novidades.listar-no')
                                ->with('success', 'Inserido com sucesso!');

        }

        return redirect()
                            ->route('novidades.listar-no')
                            ->with('error', 'Falha ao inserir');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\novidades  $novidades
     * @return \Illuminate\Http\Response
     */
    public function show(novidades $novidades)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\novidades  $novidades
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$procurar = novidades::find($id)){
            return redirect()->back();
        }
        return view('novidades.criar-no', compact('procurar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\novidades  $novidades
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(!$procurar = novidades::find($request->id))
            return redirect()->back();

        if($request->image){

            $nameFile = Str::of($request->titulo)->slug('-') . '.' . $request->image->getClientOriginalExtension();

            $image = $request->image->storeAs('novidades', $nameFile);
            $file = $image;

            $procurar->update([
                "user_id" => Auth::user()->id,
                "titulo" => $request->titulo,
                "image" => $image,
                "novidade_d" => $request->novidade_d,
                "fonte_d" => $request->fonte_d
            ]);

            return redirect()
                        ->route('novidades.listar-no')
                        ->with('success', 'Atualização com sucesso!');
         }else{
            $procurar->update($request->all());
            return redirect()
                        ->route('novidades.listar-no')
                        ->with('success', 'Atualização com sucesso!');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\novidades  $novidades
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$procurar = novidades::find($id))
            return redirect()->back();

        $procurar->delete();
        return redirect()
                            ->route('novidades.listar-no')
                            ->with('success', 'Apagado com sucesso!');
    }
}
