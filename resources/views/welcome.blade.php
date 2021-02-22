<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reciclatown</title>
        <link rel="stylesheet" href="../css/app.css">

    </head>
    <body class="">  
      <!-- This example requires Tailwind CSS v2.0+ -->
      <div class="overflow-hidden">
        <div class="bg-contain">
          <div class="relative z-10 pb-8 bg-white sm:pb-16 lg:max-w-2xl lg:w-screen lg:pb-28 h-screen">
            <svg class="hidden lg:block absolute right-0 inset-y-0 h-full w-48 text-white transform translate-x-1/2" fill="currentColor" viewBox="0 0 100 100" preserveAspectRatio="none" aria-hidden="true">
              <polygon points="50,0 100,0 50,100 0,100" />
            </svg>

            <div class="relative pt-6 px-4 sm:px-6 lg:px-8">
              <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
                <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
                  <div class="flex items-center justify-between w-full md:w-auto">
                    <a href="#">
                      <span class="sr-only">Workflow</span>
                      <img class="h-8 w-auto sm:h-10" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg">
                    </a>
                    <div class="-mr-2 flex items-center md:hidden">
                      <a href="dashboard" type="button" class="bg-white rounded-md p-2 inline-flex items-center justify-center text-blue-900 text-4x1 hover:text-red-400  focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500" id="main-menu" aria-haspopup="true">
                        Acessar
                      </a>
                    </div>
                  </div>
                </div>
                <div class="hidden font-display md:block md:ml-10 md:pr-4 md:space-x-8">
                  <a href="dashboard" class="font-display text-4x1 text-blue-900 hover:text-red-400">Acessar</a>
                </div>
              </nav>
            </div>
            <main class="mt-10 mx-auto max-w-7xl px-4 sm:mt-12 sm:px-6 md:mt-16 lg:mt-20 lg:px-8 xl:mt-28">
              <div class="sm:text-center lg:text-left">
                <h1 class="text-4xl tracking-tight font-display text-gray-900 sm:text-4xl md:text-5xl">
                  <span class="block text-red-400 font-display xl:inline">Reciclatown</span>
                  <span class="block text-blue-900 font-display xl:inline"> é um serviço on-line de descarte e coleta de lixo eletrônico</span>
                </h1>
                <p class="mt-3 text-base text-blue-900 font-display sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                 Nosso intuito é fazer da tecnologia nossa aliada a sustentabilidade.
                </p>
                <div class="mt-5 sm:mt-8 sm:flex sm:justify-center ">
                  <div class="rounded-md shadow">
                    <a href="register" class=" flex items-center justify-center px-8 py-3 border border-transparent text-base font-display rounded-md text-white bg-blue-900 hover:bg-red-400 md:py-4 md:text-lg md:px-10">
                      Saiba mais
                    </a>
                  </div>
                </div>
              </div>
            </main>
          </div>
        </div>
        <div class="bg-blue-900 lg:absolute lg:inset-y-0 lg:right-0 lg:w-2/3">
          <img class="h-56 w-full object-cover sm:h-72 md:h-96 lg:w-full lg:h-full" src="../img/home.svg" alt="">
        </div>
      </div>
    </body>
</html>
