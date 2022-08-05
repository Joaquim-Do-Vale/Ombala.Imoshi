@extends('conteudos.app')

@section('principal')
<br>
<div class="content mt-3">
    <h4 style="text-align: center; margin-bottom: 40px;">ÚLTIMAS NOTÍCIAS</h4>
    <div class="row">
        <div class="row">
            <div class="col">
                <div class="container">
                    @foreach ($news as $new)
                        <div class="card mb-3">
                            <img class="card-img-top" src="{{url("storage/{$new->image}")}}" alt="Card image cap">
                            <div class="card-body">
                            <h5 class="card-title">{{$new->tema}}</h5>
                            <p class="card-text" style="text-align: justify;">{{$new->noticia_d}}</p>
                            <p class="card-text"><i>Fonte: </i><small class="text-muted">{{$new->fonte}}</small></p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
