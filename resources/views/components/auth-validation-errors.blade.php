@props(['errors', 'mensagem', 'titulo'])

@if ($errors->any())
    <div {{ $attributes }}>
        <div class="alert alert-danger" role="alert">
            {{ __($titulo) }}
            <ul class="alert-link text-white">
                <li>{{$mensagem}}</li>
            </ul>
        </div>
    </div>
@endif
