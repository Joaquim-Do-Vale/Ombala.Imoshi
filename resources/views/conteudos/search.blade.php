@extends('conteudos.app')

@section('principal')
    <div class="row">
        <div class="col-8">

            <h1 class="display-5 fw-bold lh-1 mb-3">Pesquisar por Nomes</h1>
            @if ($search)
            <p class="h4">Buscando por: {{$search}}</p>
            @else

            @endif

            <ul>
                @foreach ($events as $event)
                <li>
                    <p class="text-muted"><strong>Nome:</strong> {{$event->name}}</p>
                    <p class="text-muted"><strong>Tema:</strong> {{$event->tema}}</p>
                    <p class="text-muted"><strong>Notícia:</strong> {{$event->titulo}}</p>
                    <p class="text-muted"><strong>Novdade:</strong> {{$event->novidade_d}}</p>
                </li>
                @endforeach
            </ul>
            @if (count($events) == 0 && $search)
                <p class="h4">Não foi possível encontrar nenhum evento com {{$search}}! <a href="{{ route('welcome') }}">voltar</a></p>
            @elseif (count($events) == 0)
                <p class="h4">Não há Eventos disponíveis</p>
            @endif
        </div>
    </div>
@endsection
