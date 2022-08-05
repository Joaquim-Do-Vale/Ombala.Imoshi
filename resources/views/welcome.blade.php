@extends('conteudos.app')

@section('carousel')
    @include('carousel.mycarousel')
@endsection

@section('principal')

    <div class="row mx-3">
        <div class="col-sm-8 ">
            <div class="row">
                @foreach ($controll as $control)
                    <div class="col mx-1">
                        <div class="card" style="width: 18rem;">
                            <img class="card-img-top" src="{{url("storage/{$control->image}")}}" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title" style="text-align: left;">{{$control->tema}}</h5>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a class="text_sec" href="{{url("storage/{$control->image}")}}" target="_blank">Visualilzar</a></button>
                                    <button type="button" class="btn btn-sm btn-outline-secondary"><a class="text_sec" href="{{route('descricao')}}" >Ver mais...</a></button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="container mt-3">{{$controll->links()}}</div>
        </div>

      <div class="col-sm-4">
            <div class="container">
                <div class="d-flex flex-column align-items-stretch flex-shrink-0 bg-white" style="width: 380px;">
                    <a href="/" class="d-flex align-items-center flex-shrink-0 p-3 link-dark text-decoration-none border-bottom">
                      <svg class="bi me-2" width="30" height="24"><use xlink:href="#bootstrap"/></svg>
                    </a>
                    <div class="list-group list-group-flush border-bottom scrollarea">
                      <a href="#" class="list-group-item list-group-item-action active py-3 lh-tight" aria-current="true">
                        <div class="d-flex w-100 align-items-center justify-content-between">
                          <strong class="mb-1">Sabias que... <img src="{{asset('img/Question.png')}}" style="text-align:center;" width="40"  /></strong>
                          <small>Novidades</small>
                        </div>
                        <div class="col-10 mb-1 small"></div>
                      </a>
                      @foreach ($recentes as $rec)
                        <a class="list-group-item list-group-item-action py-3 lh-tight">
                            <div class="embed-responsive embed-responsive-16by9 text-center">
                                <iframe class="embed-responsive-item" src="{{url("storage/{$rec->image}")}}" allowfullscreen></iframe>
                            </div>
                            <div class="d-flex w-100 align-items-center justify-content-between">
                                <strong class="mb-1" style="text-align: center;">{{$rec->titulo}}</strong>
                            </div>
                            <div class="col-10 mb-1 small" style="text-align: justify;">{{$rec->novidade_d}}</div>
                            <a href="{{$rec->fonte_d}}" target="_blank"><small class="text-muted">{{$rec->fonte_d}}</small></a>
                        </a>
                      @endforeach
                    </div>
                    {{$recentes->links()}}
                </div>
            </div>
      </div>

    </div>
    <div class="container mt-4">
        <div class="card bg-dark text-white">
            <img class="card-img" src="{{asset('img/slide_7.jpg')}}" alt="Card image">
            <div class="card-img-overlay">
              <h5 class="card-title">Imagem do Dia</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              <p class="card-text">Last updated 3 mins ago</p>
            </div>
        </div>
    </div>
@endsection
