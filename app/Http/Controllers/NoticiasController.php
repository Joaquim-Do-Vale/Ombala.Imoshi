<?php

namespace App\Http\Controllers;

use App\Models\noticias;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $recentes =DB::table('novidades')->join('users', 'users.id', '=', 'novidades.user_id')
                                        ->select('novidades.titulo', 'novidades.novidade_d', 'novidades.fonte_d', 'novidades.image')
                                        ->paginate(1);

        $controll = DB::table('noticias')->join('users', 'users.id', '=', 'noticias.user_id')
                                          ->select('noticias.tema', 'noticias.tipo', 'noticias.noticia_d', 'noticias.fonte', 'noticias.image', 'noticias.created_at')
                                          ->paginate(6);
        return view('welcome', compact('controll', 'recentes'));
    }

    public function noticias(){
        $news = DB::table('noticias')->join('users', 'users.id', '=', 'noticias.user_id')
                                          ->select('noticias.tema', 'noticias.tipo', 'noticias.noticia_d', 'noticias.fonte', 'noticias.image')
                                          ->get();
        return view('noticias.descricao', compact('news'));
    }

    public function listar()
    {

        $listar = DB::table('noticias')->join('users', 'users.id', '=', 'noticias.user_id')
                                        ->select('noticias.id', 'noticias.tema', 'noticias.tipo', 'noticias.noticia_d', 'noticias.fonte', 'noticias.image')
                                        ->where('noticias.user_id', Auth::user()->id)->paginate(2);
        return view('noticias.index-n', compact('listar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $create = "ok";
        return view('noticias.criar-n', compact('create'));
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
            $nameFile = Str::of($request->tema)->slug('-') . '.' . $request->image->getClientOriginalExtension();

            $image = $request->image->storeAs('noticias', $nameFile);
            $file = $image;

            noticias::create([
                "user_id" => Auth::user()->id,
                "tema" =>$request->tema,
                "tipo" => $request->tipo,
                "noticia_d" => $request->noticia_d,
                "orcamento" => $request->orcamento,
                "fonte" => $request->fonte,
                "image" => $image
            ]);

            return redirect()
                            ->route('noticias.index-n')
                            ->with('success', 'Inserido com sucesso!');
        }
            return redirect()
                            ->route('noticias.index-n')
                            ->with('error', 'Falha ao inserir');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function show(noticias $noticias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        if(!$procurar = noticias::find($id)){
            return redirect()->back();
        }
        return view('noticias.criar-n', compact('procurar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if(!$procurar = noticias::find($request->id))
            return redirect()->back();

        if($request->image){

            $nameFile = Str::of($request->titulo)->slug('-') . '.' . $request->image->getClientOriginalExtension();

            $image = $request->image->storeAs('noticias', $nameFile);
            $file = $image;

            $procurar->update([
                "user_id" => Auth::user()->id,
                "tema" =>$request->tema,
                "tipo" => $request->tipo,
                "noticia_d" => $request->noticia_d,
                "orcamento" => $request->orcamento,
                "fonte" => $request->fonte,
                "image" => $image
            ]);

            return redirect()
                        ->route('noticias.index-n')
                        ->with('success', 'Atualização com sucesso!');
         }else{
            $procurar->update($request->all());
            return redirect()
                        ->route('noticias.index-n')
                        ->with('success', 'Atualização com sucesso!');

        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\noticias  $noticias
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if(!$procurar = noticias::find($id))
            return redirect()->back();

        $procurar->delete();
        return redirect()
                            ->route('noticias.index-n')
                            ->with('success', 'Apagado com sucesso!');
    }

    public function pesquisar(){
        $search = request('search');

        if($search){
            $events = User::where([
                ['tema', 'like', '%'.$search.'%']
            ])->join('noticias', 'users.id', '=', 'noticias.user_id')
              ->join('novidades', 'users.id', '=', 'novidades.user_id')
              ->select('name', 'noticias.tema', 'noticias.noticia_d', 'novidades.titulo', 'novidades.novidade_d')->get();
        }else{
            $events = User::all();
        }

        return view('content.search', compact('events', 'search'));
    }

    public function search(Request $request){
        $data = [];

        return view('conteudos.search');
    }
}
