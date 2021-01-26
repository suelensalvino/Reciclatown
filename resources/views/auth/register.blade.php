<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

             <!-- tipo -->
            <div class="mt-4">
                <x-label for="tipo" :value="__('Tipo')" />

                <x-input id="tipo" class="block mt-1 w-full" type="text" name="tipo" :value="old('tipo')" required />
            </div>

               <!-- nascimento -->
            <div class="mt-4">
                <x-label for="nascimento" :value="__('Nascimento')" />

                <x-input id="nascimento" class="block mt-1 w-full" type="date" name="nascimento" :value="old('nascimento')" required />
            </div>



            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- cidade -->
            <div class="mt-4">
                <x-label for="cidade" :value="__('Cidade')" />

                <x-input id="cidade" class="block mt-1 w-full" type="text" name="cidade" :value="old('cidade')" required />
            </div>

              <!-- bairro -->
            <div class="mt-4">
                <x-label for="bairro" :value="__('Bairro')" />

                <x-input id="bairro" class="block mt-1 w-full" type="text" name="bairro" :value="old('bairro')" required />
            </div>

            <!-- uf -->
            <div class="mt-4">
                <x-label for="uf" :value="__('uf')" />

                <x-input id="uf" class="block mt-1 w-full" type="text" name="uf" :value="old('uf')" required />
            </div>

             <!-- complemento -->
            <div class="mt-4">
                <x-label for="complemento" :value="__('Complemento')" />

                <x-input id="complemento" class="block mt-1 w-full" type="text" name="complemento" :value="old('complemento')" required />
            </div>


             <!-- cep -->
            <div class="mt-4">
                <x-label for="cep" :value="__('Cep')" />

                <x-input id="cep" class="block mt-1 w-full" type="text" name="cep" :value="old('cep')" required />
            </div>

             <!-- logradouro -->
            <div class="mt-4">
                <x-label for="logradouro" :value="__('Logradouro')" />

                <x-input id="logradouro" class="block mt-1 w-full" type="text" name="logradouro" :value="old('logradouro')" required />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
