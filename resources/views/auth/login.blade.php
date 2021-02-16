<x-guest-layout>
    <body class="">
    <div class="bg-blue-900 lg:absolute lg:inset-y-0 lg:right-0 lg:w-2/3">
        <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="https://images.unsplash.com/photo-1551434678-e076c223a692?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=2850&q=80" alt=""/>
    </div>

        <div class="overflow-hidden">
            <div class="bg-contain">
                <div class="relative z-10 pb-8 bg-blue-900 sm:pb-16 lg:max-w-2xl lg:w-screen lg:pb-28 h-screen">    

                  <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-transparent">
                    <slot name="logo" >
                      <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-white.svg" alt="Workflow"/>
                    </slot>
                        <!-- Session Status -->
                        <x-auth-session-status class="-mt-14" :status="session('status')" />    

                        <!-- Validation Errors -->
                         <x-auth-validation-errors class="-mt-14" :errors="$errors" />  

                            <div class="w-full sm:max-w-md mt-20 px-6 py-4 bg-transparent overflow-hidden sm:rounded-lg">
                                <form class="mt-8 space-y-6 " method="POST" action="{{ route('login') }}">
                                  @csrf 

                                    <div class="rounded-md shadow-sm -space-y-px">
                                        <div>
                                          <label for="email" :value="__('Email')" />
                                          <input id="email" class="mb-8 bg-transparent block mt-1 w-full border-0 border-red-400 border-b-2 border-red-400 appearance-none rounded-none relative block w-full px-3 py-2 placeholder-red-400 text-red-400 rounded-sm text-xl focus:outline-none focus:ring-red-500 focus:border-opacity-0" type="email" name="email" :value="old('email')" placeholder="Email" required autofocus />
                                        </div>
                                        <div>
                                          <label  for="password" :value="__('Password')" />
                                          <input id="password" class="mb-8 bg-transparent block mt-1 w-full border-0 border-red-400 border-b-2 border-red-400 appearance-none rounded-none relative block w-full px-3 py-2 placeholder-red-400 text-red-400 rounded-sm text-xl focus:outline-none focus:ring-red-500 focus:border-opacity-0" name="password" type="password" autocomplete="current-password" required autocomplete="current-password" required class="block mt-1 w-full"  placeholder="Password"/>
                                        </div>
                                    </div>          

                                    <div class="flex items-center justify-between">
                                        <div class="flex items-center">
                                          <input id="remember_me" name="remember_me" type="checkbox" class="h-4 w-4 bg-transparent text-red-400 focus:ring-red-500 border-red-400 rounded">
                                          <label for="remember_me" class="ml-2 block text-sm text-red-400">
                                             <span>{{ __('Remember me') }}</span>
                                         </label>
                                        </div>  
                                        <div class="text-sm">
                                          @if (Route::has('password.request'))
                                            <a class="underline text-sm text-red-400 hover:text-white" href="{{ route('password.request') }}">
                                            {{ __('Esqueceu a senha?') }}
                                            </a>
                                            @endif
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
                                            {{ __('Entrar') }}
                                        </button>
                                    </div>      

                                    <div class="text-sm">
                                        <a class="mx-20 underline text-sm text-red-400 hover:text-white" href="{{ route('register') }}">
                                            {{ __('Novo por aqui? Faça seu cadastro') }}
                                        </a>
                                    </div>
                                </form> 
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </body> 
</x-guest-layout>
