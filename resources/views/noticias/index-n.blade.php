@extends('layouts.app')

@section('conteudo')
    <br>
    @if (session('success'))
    <div class="alert alert-success m-auto">
        {{session('success')}}
    </div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger m-auto">
            {{ session('error') }}
        </div>
    @endif
    <div class="mt-3"></div>
    <div class="mt-3"></div>

    <h3>Notícias existentes</h3>
    <p class="text-end">Caso deseja criar mais notícias clique aqui... <a class="btn btn-success" style="border-radius: 5px;" href="{{route('noticias.criar-n')}}">Criar</a></p>

    @php
        $i=0;
    @endphp

    <div class="my-3 p-3 bg-body rounded shadow-sm">
        @foreach ($listar as $lista)
        <img class="mt-3" src="{{url("storage/{$lista->image}")}}" alt="{{$lista->tema}}" style="max-width:100px;">
        <h6 class="border-bottom pb-2 mb-0">{{$lista->tema}}</h6>
            <div class="d-flex text-muted pt-3">
                <h3>{{$lista->tipo}}</h3>
                <svg class="bd-placeholder-img flex-shrink-0 me-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: 32x32" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#007bff"/><text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text></svg>
                <p class="pb-3 mb-0 small lh-sm border-bottom" style="text-align: justify;">
                <strong class="d-block text-gray-dark">@_{{Auth::user()->name}}</strong>
                {{$lista->noticia_d}}
                <br><br>
                {{$lista->fonte}}
                </p>
                <p class="float-end">
                    <a class="text-primary" style="text-decoration: none;" href="{{route('noticias.edit', $lista->id)}}">Editar</a>
                    <a class="text-danger"  style="text-decoration: none;" href="{{route('noticias.delete', $lista->id)}}">Apagar</a>
                </p>
            </div>
        @endforeach
        <small class="d-block text-end mt-3">
          <a href="#">Ir para o topo</a>
        </small>
    </div>
      <hr>
      {{$listar->links()}}
@endsection
