@extends('layouts.app')

@section('conteudo')
<br>
<div class="container mt-3">
    <div class="py-5 text-center">
        <h2>Criando Notícia da secção Novidades</h2>
        <p class="lead">Esta é a parte em que os funcionários logados irão inserir os temas das notícias de acordo com as suas pesquisas.</p>
    </div>
   @isset($create)
        <form name="questoes" action="{{route('novidades.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="titulo">Tema:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" placeholder="Insere aqui o Tema...">
            </div>
            <div class="form-group">
                <label for="image">Insere Imagem:</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="novidade_d">Descrição:</label>
                <textarea name="novidade_d" id="novidade_d" class="form-control" cols="40" rows="5"></textarea>
            </div>
            <div class="form-group">
                <label for="fonte_d">Fonte:</label>
                <input type="text" id="fonte_d" name="fonte_d" class="form-control">
            </div><br>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
@else
        <form name="questoes" action="{{route('novidades.update',$procurar->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="titulo">Tema:</label>
                <input type="text" id="titulo" name="titulo" class="form-control" value="{{$procurar->titulo}}" placeholder="Insere aqui o Tema...">
            </div>
            <div class="form-group mt-2">
                <label for="">Imagem Atual: </label>
                <img src="{{url("storage/{$procurar->image}")}}" alt="{{$procurar->titulo}}" class="img-circle" width="50" height="50">
            </div>
            <div class="form-group">
                <label for="image">Insere Imagem:</label>
                <input type="file" name="image" id="image" class="form-control">
            </div>
            <div class="form-group">
                <label for="novidade_d">Descrição:</label>
                <textarea name="novidade_d" id="novidade_d" class="form-control" cols="40" rows="5">{{$procurar->novidade_d}}</textarea>
            </div>
            <div class="form-group">
                <label for="fonte_d">Fonte:</label>
                <input type="text" id="fonte_d" name="fonte_d" value="{{$procurar->fonte_d}}" class="form-control">
            </div><br>
            <button type="submit" class="btn btn-primary">Atualizar</button>
        </form>
   @endisset

</div>
@endsection
