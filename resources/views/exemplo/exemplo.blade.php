@extends('conteudos.app')

@section('principal')
        @foreach ($controll as $control)
        <article>
            <div class="container">
                <div class="row row-cols-3">
                    <div class="col" style="width: 300px;">
                        <div class="card shadow-sm">
                            <img class="imgFt" src="{{url("storage/{$control->image}")}}" width="100%" height="225" />
                            <div class="card-body">
                                <p class="card-text">{{$control->tema}}</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a class="text_sec" href="{{url("storage/{$control->image}")}}" target="_blank">Visualilzar</a></button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary"><a class="text_sec" href="{{$control->noticia_d}}" >Ver mais...</a></button>
                                    </div>
                                <!-- <small class="text-muted">9 mins</small> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </article>
        @endforeach
@endsection
