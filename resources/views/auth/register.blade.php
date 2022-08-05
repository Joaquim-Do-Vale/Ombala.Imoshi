<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :titulo="session('titulo','Whoops! Algo deu errado.')" :mensagem="session('mensagem','Erro no cadastro! Tente de novo')" />

        <main class="form-signin">
            <form method="POST" action="{{ route('register') }}">
                <h1 class="h3 mb-3 fw-normal">CADASTRAR</h1>
                @csrf

                <!-- Name -->
                <div class="form-floating">
                    <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" aria-placeholder="Digite o seu Nome" required autofocus />

                    <x-label for="name" :value="__('Nome')" />
                </div>

                <!-- Email Address -->
                <div class="form-floating">
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="nome@exemplo.com" required />

                    <x-label for="email" :value="__('Email')" />
                </div>

                <!-- Password -->
                <div class="form-floating">
                    <x-input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    required autocomplete="new-password" />

                    <x-label for="password" :value="__('Password')" />
                </div>

                <!-- Confirm Password -->
                <div class="form-floating">
                    <x-input id="password_confirmation" class="form-control"
                                    type="password"
                                    name="password_confirmation" required />

                    <x-label for="password_confirmation" :value="__('Confirmar a senha')" />
                </div>

                <!-- genero -->
                <div class="form-floating">
                    <select name="genero" class="form-control" id="genero">
                        <option value="masculino" selected>Masculino</option>
                        <option value="feminino">Feminino</option>
                    </select>
                </div>

                <!-- contactos -->
                <div class="form-floating">
                    <x-input id="contactos" class="form-control" type="text" maxlength="13" name="contactos" :value="old('contactos')" required autofocus />

                    <x-label for="contactos" :value="__('Contactos')" />
                </div>

                <!-- provincia -->
                <div class="form-floating">
                    <x-input id="provincia" class="form-control" type="text" name="provincia" :value="old('provincia')" required autofocus />

                    <x-label for="provincia" :value="__('Provincia')" />
                </div>

                <!-- cidade -->
                <div class="form-floating">
                    <x-input id="cidade" class="form-control" type="text" name="cidade" :value="old('cidade')" required autofocus />

                    <x-label for="cidade" :value="__('Cidade')" />
                </div>

                <!-- referencia -->
                <div class="form-floating">
                    <x-input id="referencia" class="form-control" type="text" name="referencia" :value="old('referencia')" required autofocus />

                    <x-label for="referencia" :value="__('Referencia')" />
                </div>

                <!-- categoria -->
                <div class="form-floating">
                    <select name="categoria" class="form-control" id="categoria">
                        <option value="cameramen">Camera Men</option>
                        <option value="escritor">Escritor</option>
                        <option value="editor">Editor</option>
                        <option value="jornalista">Jornalista</option>
                        <option value="reporter" selected>Reporter</option>
                        <option value="outros">Outros</option>
                    </select>
                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                        {{ __('Já estás cadastrado?') }}
                    </a>

                    <x-button class="w-100 btn btn-lg btn-primary">
                        {{ __('Cadastrar') }}
                    </x-button>
                </div>
            </form>
        </main>
    </x-auth-card>
</x-guest-layout>
