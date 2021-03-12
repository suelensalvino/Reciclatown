<x-guest-layout>
    <div>
        <head>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <link rel="stylesheet" href="../css/app.css">
        </head>

        <body>
            <div class="pb-8 bg-red-400">
                <a href="/">
                    <svg  width="30" height="30" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="ml-6 text-white hover:text-blue-900 dark:hover:text-white transition-colors duration-200" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                </a>
                <div class="leading-snug ">
                    <div class="sm:text-center lg:text-center lg:px-12 pt-4">
                        <h1 class="text-4xl">
                            <span class="block text-blue-900 xl:inline">Reciclatown</span>
                            <span class="block text-white  xl:inline"> é uma plataforma de descarte e coleta de lixo eletrônico</span>
                        </h1>
                    </div>
                </div>
            </div>

            <!-- Section blue -->
            <div class="block py-10 bg-blue-900">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                  <div class="lg:text-center">
                    <p class="text-3xl leading-8 tracking-tight text-white sm:text-4xl">
                        Para participar siga os passos
                    </p>
                </div>

                <div class="mt-10">
                  <div class="mt-4 text-center">
                   <!-- Validation Errors -->
                   <x-auth-validation-errors class="mb-4" :errors="$errors" />
               </div>
               <div class="p-6 rounded-md shadown-md bg-white border-b border-gray-200">
                  <div class="md:grid md:grid-cols-3 md:gap-6">
                    <div class="md:col-span-1">
                      <div class="px-4 sm:px-0">
                        <h3 class="text-lg font-medium leading-6 text-gray-900">1) Dados pessoais</h3>
                        <p class="mt-1 text-sm text-gray-600">
                           Vamos começar! <br> Preencha corretamente os campos com seus dados
                       </p>
                   </div>
               </div>

               <div class="mt-5 md:mt-0 md:col-span-2">
                 <form class="mb-8  "method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="grid grid-cols-6 gap-6">
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <x-label class="tex" for="name" :value="__('Nome')" />

                            <x-input id="name" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="text" name="name" :value="old('name')" required autofocus />
                        </div>

                        <!-- nascimento -->
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <x-label for="nascimento" :value="__('Nascimento')" />

                            <x-input id="nascimento" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="date" name="nascimento" :value="old('nascimento')" required />
                        </div>



                        <!-- Email Address -->
                        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                            <x-label for="email" :value="__('E-mail')" />

                            <x-input id="email" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="email" name="email" :value="old('email')" required />
                        </div>
                    </div>
                </div>
            </div>

            <div class="hidden sm:block" aria-hidden="true">
              <div class="py-5">
                <div class="border-t border-gray-200"></div>
            </div>
        </div>

        <div class="mt-10 sm:mt-0">
          <div class="md:grid md:grid-cols-3 md:gap-6">
            <div class="md:col-span-1">
              <div class="px-4 sm:px-0">
                <h3 class="text-lg font-medium leading-6 text-gray-900">2) Localização</h3>
                <p class="mt-1 text-sm text-gray-600">
                    Informe corretamente sua localização 
                </p>
            </div>
        </div>
        <div class="mt-5 md:mt-0 md:col-span-2">
            <div class="grid grid-cols-6 gap-6 mb-4">
               <!-- cidade -->
               <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <x-label for="cidade" :value="__('Cidade')" />

                <x-input id="cidade" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="text" name="cidade" :value="old('cidade')" required />
            </div>

            <!-- bairro -->
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <x-label for="bairro" :value="__('Bairro')" />

                <x-input id="bairro" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="text" name="bairro" :value="old('bairro')" required />
            </div>

            <!-- uf -->
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <x-label for="uf" :value="__('UF')" />

                <x-input id="uf" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="text" name="uf" :value="old('uf')" required />
            </div>
        </div>
        <div class="grid grid-cols-6 gap-6">
            <!-- complemento -->
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <x-label for="complemento" :value="__('Complemento')" />

                <x-input id="complemento" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="text" name="complemento" :value="old('complemento')" required />
            </div>

            <!-- cep -->
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <x-label for="cep" :value="__('CEP')" />

                <x-input id="cep" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="text" name="cep" :value="old('cep')" required />
            </div>

            <!-- logradouro -->
            <div class="col-span-6 sm:col-span-6 lg:col-span-2">
                <x-label for="logradouro" :value="__('Logradouro')" />

                <x-input id="logradouro" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md" type="text" name="logradouro" :value="old('logradouro')" required />
            </div>
        </div>

    </div>
</div>
</div>

<div class="hidden sm:block" aria-hidden="true">
  <div class="py-5">
    <div class="border-t border-gray-200"></div>
</div>
</div>

<div class="mt-10 sm:mt-0">
  <div class="md:grid md:grid-cols-3 md:gap-6">
    <div class="md:col-span-1">
      <div class="px-4 sm:px-0">
        <h3 class="text-lg font-medium leading-6 text-gray-900">3) Senha</h3>
        <p class="mt-1 text-sm text-gray-600">
         Por fim, defina uma senha forte. <br> Se possível alterne letras maiúsculas, minúsculas e caracteres especiais
     </p>
 </div>
</div>
<div class="mt-5 md:mt-0 md:col-span-2">
    <div class="grid grid-cols-6 gap-6">
        <!-- Password -->
        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
            <x-label for="password" :value="__('Password')" />

            <x-input id="password" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            type="password"
            name="password"
            required autocomplete="new-password" />
        </div>

        <!-- Confirm Password -->
        <div class="col-span-6 sm:col-span-6 lg:col-span-2">
            <x-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-input id="password_confirmation" class="mt-1 focus:ring-indigo-500 focus:border-indigo-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md"
            type="password"
            name="password_confirmation" required />
        </div>
    </div>

    <div class="flex items-center justify-end mt-16">
        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
            {{ __('Já possui uma conta?') }}
        </a>

        <x-button class="ml-4 justify-center text-white bg-blue-900 hover:bg-red-400 hover:text-blue-900 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
            {{ __('Finalizar') }}
        </x-button>
    </div>
</form>

</div>

</div>
</div>
</div>
</div>
</div>
</div>

<div class="bg-red-400">
  <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-8 lg:px-8 lg:flex lg:items-center lg:justify-between">
    <h2 class="text-2xl tracking-tight text-white sm:text-lg">
      <span class="block"> © 2021 !Perfect Codes - Reciclatown - Todos os direitos reservados</span>
    </h2>
    <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
      <div class="ml-3 inline-flex rounded-full h-10 w-10 flex items-center justify-center shadow-none">
        <a href="https://github.com/suelensalvino/Reciclatown">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="text-xl text-white hover:text-blue-900 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
            <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
            </path>
          </svg>
        </a>
      </div>
    </div>
  </div>
</div>

</x-guest-layout>
