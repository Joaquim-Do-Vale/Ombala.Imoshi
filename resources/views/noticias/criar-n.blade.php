@extends('layouts.app')

@section('conteudo')
<br>
<div class="container mt-3">

    <div class="py-5 text-center">
        <h2>Criando Notícia</h2>
        <p class="lead">Esta é a parte em que os funcionários logados irão inserir notícias de acordo com as suas pesquisas feitas.</p>
    </div>

        @isset($create)

                <form name="questoes" action="{{route('noticias.store')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="tema">Tema da Notícia:</label>
                        <input type="text" id="tema" name="tema" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Imagem da Notícia:</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTipo">Tipo de Notícia:</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="POLITICA">Política</option>
                            <option value="REGIOES" selected>Regiões</option>
                            <option value="SOCIEDADE">Sociedade</option>
                            <option value="ECONOMIA">Economia</option>
                            <option value="CIENCIA">Ciência</option>
                            <option value="CULTURA">Cultura</option>
                            <option value="RELIGIOES">Religiões</option>
                            <option value="DESPORTO">Desporto</option>
                            <option value="ENTREVISTA">Entrevista</option>
                            <option value="REPORTAGEM">Reportagem</option>
                            <option value="OPINIAO">Opinião</option>
                            <option value="MUNDO">Mundo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mensagemNoticia_d">Descrição:</label>
                        <textarea name="noticia_d" id="noticia_d" class="form-control" cols="40" rows="5" placeholder="Descrição da notícia" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="orcamento">Orcamento:</label>
                        <input type="text" id="orcamento" name="orcamento" class="form-control" placeholder="Insere os valores">
                    </div>
                    <div class="form-group">
                        <label for="fonte">Fonte:</label>
                        <input type="text" id="fonte" name="fonte" class="form-control" placeholder="Digite o link ou algum topo de referências">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Enviar</button>
            </form>

        @else

                <form name="questoes" action="{{route('noticias.update', $procurar->id)}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="tema">Tema da Notícia:</label>
                        <input type="text" id="tema" name="tema" value="{{$procurar->tema}}" class="form-control">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Imagem Atual: </label>
                        <img src="{{url("storage/{$procurar->image}")}}" alt="{{$procurar->tema}}" class="img-circle" width="50" height="50">
                    </div>
                    <div class="form-group">
                        <label for="image">Imagem da Notícia:</label>
                        <input type="file" id="image" name="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputTipo">Tipo de Notícia:</label>
                        <select name="tipo" id="tipo" class="form-control">
                            <option value="POLITICA">Política</option>
                            <option value="REGIOES" selected>Regiões</option>
                            <option value="SOCIEDADE">Sociedade</option>
                            <option value="ECONOMIA">Economia</option>
                            <option value="CIENCIA">Ciência</option>
                            <option value="CULTURA">Cultura</option>
                            <option value="RELIGIOES">Religiões</option>
                            <option value="DESPORTO">Desporto</option>
                            <option value="ENTREVISTA">Entrevista</option>
                            <option value="REPORTAGEM">Reportagem</option>
                            <option value="OPINIAO">Opinião</option>
                            <option value="MUNDO">Mundo</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="mensagemNoticia_d">Descrição:</label>
                        <textarea name="noticia_d" id="noticia_d" class="form-control" cols="40" rows="5" placeholder="Descrição da notícia" required>{{$procurar->noticia_d}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="orcamento">Orcamento:</label>
                        <input type="text" id="orcamento" name="orcamento" value="{{$procurar->orcamento}}" class="form-control" placeholder="Insere os valores">
                    </div>
                    <div class="form-group">
                        <label for="fonte">Fonte:</label>
                        <input type="text" id="fonte" name="fonte" value="{{$procurar->fonte}}" class="form-control" placeholder="Digite o link ou algum topo de referências">
                    </div><br>
                    <button type="submit" class="btn btn-primary">Atualizar</button>
            </form>

        @endisset

    </div>
@endsection
