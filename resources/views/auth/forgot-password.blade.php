<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
            </a>
        </x-slot>

        <div class="alert alert-info">
            {{ __('ESQUECEU A SUA SENHA? Não há problema. Apenas deixe-nos saber o seu enderço de e-mail para um link de reinicialização de senha que lhe permitirá escolher um novo.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

       <!-- Validation Errors -->
       <x-auth-validation-errors class="mb-4" :titulo="session('titulo','Whoops! Algo deu errado.')" :mensagem="session('mensagem','Erro na autenticação! Tente de novo')" />
        <main class="form-signin">
            <form method="POST" action="{{ route('password.email') }}">
                @csrf

                <!-- Email Address -->
                <div class="form-floating">
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="nome@exemplo.com" required autofocus />

                    <x-label for="email" :value="__('Email')" />
                </div>

                <div class="flex items-center justify-end mt-4">
                    <x-button class="w-100 btn btn-lg btn-primary">
                        {{ __('Digite o seu Email') }}
                    </x-button>
                </div>
            </form>
        </main>
    </x-auth-card>
</x-guest-layout>
