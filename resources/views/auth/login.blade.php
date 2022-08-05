<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
            </a>
        </x-slot>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :titulo="session('titulo','Whoops! Algo deu errado.')" :mensagem="session('mensagem','Erro na autenticação! Tente de novo')" />

        <main class="form-signin">
            <form method="POST" action="{{ route('login') }}">
                <h1 class="h3 mb-3 fw-normal">LOGIN</h1>
                @csrf

                <!-- Email Address -->
                <div class="form-floating">
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" placeholder="nome@exemplo.com" required autofocus />

                    <x-label for="email" :value="__('Email')" />
                </div>

                <!-- Password -->
                <div class="form-floating">
                    <x-input id="password" class="form-control"
                                    type="password"
                                    name="password"
                                    placeholder="Digite a sua senha"
                                    required autocomplete="current-password" />

                <x-label for="password" :value="__('Password')" />
                </div>

                <!-- Remember Me -->
                <div class="checkbox mb-3">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                        <span class="ml-2 text-sm text-gray-600">{{ __('Lembrar me') }}</span>
                    </label>
                </div>

                <div class="flex items-center justify-end mt-4">
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Esqueceu sua senha?') }}
                        </a>
                    @endif

                    <x-button class="w-100 btn btn-lg btn-primary">
                        {{ __('Log in') }}
                    </x-button>
                </div>
            </form>
        </main>
    </x-auth-card>
</x-guest-layout>
