<x-guest-layout>
    <body class="">
    <div class="bg-blue-900 lg:absolute lg:inset-y-0 lg:right-0 lg:w-2/2">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="../../img/foto.svg" alt=""/>
    </div>

        <div class="overflow-hidden">
            <div class="bg-contain">
                <div class="relative z-10 pb-8 bg-blue-900 sm:pb-16 lg:max-w-2xl lg:w-screen lg:pb-28 h-screen">    
                  <a href="login">
                    <svg  width="30" height="30" fill="currentColor" xmlns="http://www.w3.org/2000/svg" class="ml-6 text-white hover:text-red-400 dark:hover:text-white transition-colors duration-200" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18" />
                    </svg>
                  </a>
                  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-transparent">
                    <slot name="logo" >
                     <img class="mx-auto h-20 w-auto" src="../img/logo-b.png" alt="Workflow"/>
                    </slot>
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />    

                        <!-- Validation Errors -->
                        <x-auth-validation-errors class="mb-4" :errors="$errors" />  

                            <div class="w-full sm:max-w-md mt-8 px-6 py-4 bg-transparent overflow-hidden sm:rounded-lg">
                                <form class="mt-8 space-y-6 " method="POST" action="{{ route('password.email') }}">
                                  @csrf 

                                  <div class="text-center text-xl text-white">
                                        Digite seu e-mail e enviaremos um link para redefinir sua senha.
                                  </div>

                                    <div class="rounded-md shadow-sm -space-y-px">
                                        <div>
                                          <label for="email" :value="__('Email')" />
                                          <input id="email" class="mb-8 bg-transparent block mt-1 w-full border-0 border-red-400 border-b-2 border-red-400 appearance-none rounded-none relative block w-full px-3 py-2 placeholder-red-400 text-red-400 rounded-sm text-xl focus:outline-none focus:ring-red-500 focus:border-opacity-0" type="email" name="email" :value="old('email')" placeholder="E-mail" required autofocus />
                                        </div>
                                    </div>                  

                                    <div>
                                        <button type="submit" class="mb-20 shadow-2xl group relative w-full flex justify-center py-2 px-4 border border-transparent text-xl font-medium rounded-md text-blue-900 bg-red-400 hover:bg-white hover:text-red-400 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500">
                                          <span class="absolute left-0 inset-y-0 flex items-center pl-3">
                                            <!-- Heroicon name: solid/lock-closed -->
                                            <svg class="h-5 w-5 text-blue-900 group-hover:text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                              <path fill-rule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clip-rule="evenodd" />
                                            </svg>
                                          </span>
                                            {{ __('Enviar') }}
                                        </button>
                                    </div>

                                </form> 
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</x-guest-layout>
