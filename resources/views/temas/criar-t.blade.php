@extends('layouts.app')

@section('conteudo')
    <div class="container mt-3">
        <div class="py-5 text-center">
            <h2>Criando Tema</h2>
            <p class="lead">Esta é a parte em que os funcionários logados irão inserir os temas das notícias de acordo com as suas pesquisas.</p>
        </div>

        <form name="questoes" action="{{route('temas.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tema_d">Tema:</label>
                <input type="text" id="tema_d" name="tema_d" class="form-control" placeholder="Insere aqui o Tema...">
            </div><br>
            <button type="submit" class="btn btn-primary">Enviar</button>
      </form>
    </div>
@endsection
