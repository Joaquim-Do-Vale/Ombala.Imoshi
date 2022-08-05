@extends('conteudos.app')

@section('assunto-principal')
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
    <div class="container mt-3">

        <div class="py-5 text-center">
            <h2>Fale Conosco</h2>
            <p class="lead">Esta é a parte em que nos comunicaremos, ou seja, exclarecerás as suas dúvidas preenchendo todos os espaços vazios.</p>
        </div>
        <form name="questoes" action="{{route('contactos.store')}}" method="POST">
            @csrf
            <div class="form-group">
                <label for="exampleInputName1" class="text-end">Nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Seu nome" required>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" placeholder="exemplo@email.com" required>
            </div>
            <div class="form-group">
                <label for="mensagemQuestao">Mensagem</label>
                <textarea name="mensagem" class="form-control" cols="40" rows="5" placeholder="Deixe aqui a sua mensagem" required></textarea>
            </div><br>
            <input type="submit" value="Enviar">
            {{-- <button type="submit" class="btn btn-primary">Enviar</button> --}}
        </form>
    </div>
@endsection
