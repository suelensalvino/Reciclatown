<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Reciclatown</title>
        <link rel="stylesheet" href="../css/app.css">
    </head>
    <body>  
      <header class=" bg-white">
        <div class="pt-6 px-4 sm:px-6 lg:px-8">
          <nav class="relative flex items-center justify-between sm:h-10 lg:justify-start" aria-label="Global">
            <div class="flex items-center flex-grow flex-shrink-0 lg:flex-grow-0">
              <div class="flex items-center justify-between w-full md:w-auto">
                <a href="#">
                  <span class="sr-only">Workflow</span>
                  <img class="h-20 w-auto sm:h-20" src="../img/logo-a.png">
                </a>
            </div>
            <div class="hidden text-left font-display md:block md:ml-10 md:pr-4 md:space-x-8">
              <a href="dashboard" class="font-display sm:text-xl text-2x1 text-blue-900 hover:text-red-400">Acessar</a>
            </div>
          </nav>
        </div>
      </header>


      <div class="overflow-hidden">
        <div class="bg-contain">
          <div class="bg-blue-900 lg:absolute lg:right-0 lg:w-1/2">
            <img class="h-40 w-full object-cover sm:h-40 md:h-96 lg:w-full lg:h-full" src="../img/bg1.png" alt="">
          </div>
          <div class="relative lg:max-w-2xl lg:w-screen lg:px-20 ">
            <div class="sm:text-center lg:text-center lg:px-12 py-20">
              <h1 class="text-4xl tracking-tight text-gray-900 sm:text-4xl md:text-5xl">
                <span class="block text-red-400  xl:inline">Reciclatown</span>
                <span class="block text-blue-900  xl:inline"> é um serviço on-line de descarte e coleta de lixo eletrônico</span>
              </h1>
              <p class="mt-3 text-base text-blue-900  sm:mt-5 sm:text-lg sm:max-w-xl sm:mx-auto md:mt-5 md:text-xl lg:mx-0">
                Nosso intuito é fazer da tecnologia nossa aliada a sustentabilidade.
              </p>
              <div class="mt-5 sm:mt-8 sm:flex sm:justify-center ">
                <div class="rounded-md shadow">
                  <a href="register" class=" flex items-center justify-center px-8 py-3 border border-transparent text-base font-display rounded-md text-white bg-blue-900 hover:bg-red-400 md:py-4 md:text-lg md:px-10">
                    Cadastre-se
                  </a>
              </div>
            </div>
          </div>
        </div> 
      </div>         
     
      <!-- Section blue -->
      <div class="py-20 bg-blue-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <h2 class="text-base font-medium text-red-400 tracking-wide uppercase">Reciclatown</h2>
            <p class="mt-2 text-3xl leading-8 tracking-tight text-white sm:text-4xl">
              Plataforma de descarte e coleta de lixo eletrônico
            </p>
            <p class="mt-4 max-w-2xl text-xl text-red-400 lg:mx-auto">
           <!--    Proporcionamos uma maior facilidade e melhor comunicação entre pessoas que desejam descartar algum objeto eletrônico com pessoas que coletam esse tipo de material.--></p>
          </div>

          <div class="mt-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-3 md:gap-x-8 md:gap-y-10">
              <div class="flex">
                <div class="ml-4">
                  <dt class="text-lg leading-6 font-bold text-white">
                    Nosso objetivo
                  </dt>
                  <dd class="mt-2 text-base text-white">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione.
                  </dd>
                </div>
              </div>

              <div class="flex">
                <div class="ml-4">
                  <dt class="text-lg leading-6 font-bold text-white">
                    Como funciona
                  </dt>
                  <dd class="mt-2 text-base text-white">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione. 
                  </dd>
                </div>
              </div>

              <div class="flex">
                <div class="ml-4">
                  <dt class="text-lg leading-6 font-bold text-white">Porque descartar um eletrônico?</dt>
                  <dd class="mt-2 text-base text-white">
                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione. Lorem ipsum, dolor sit amet consectetur adipisicing elit. Maiores impedit perferendis suscipit eaque, iste dolor cupiditate blanditiis ratione. 
                  </dd>
                </div>
              </div>
            </dl>
          </div>
        </div>
      </div>

      <!-- Section statistic -->
      <div class="py-20 bg-blue-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <p class="mt-2 text-3xl leading-8 tracking-tight text-white sm:text-4xl">
              Principais problemas provocados pelo despejo inapropriado
            </p>
            <p class="mt-4 max-w-2xl sm:text-center text-xl text-white lg:mx-auto">
            Você sabia que o acúmulo de lixo eletrônico em lugares inoportunos é o grande responsável por problemas não apenas ambientais mas também da sua própria saúde?
            </p>
            <div class="mt-10">
              <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-4 md:gap-x-8 md:gap-y-10">
                <div class="flex-shrink-0">
                  <div class="ml-4">
                    <dt class="text-lg sm:text-center leading-6 font-medium text-white">Lorem ipsum</dt>
                    <dd class="mt-2 text-3x1 text-red-400 sm:text-4xl sm:text-center">80%</dd>
                  </div>
                </div>

                <div class="flex-shrink-0">
                  <div class="ml-4">
                    <dt class="text-lg sm:text-center leading-6 font-medium text-white">Lorem ipsum</dt>
                    <dd class="mt-2 text-3x1 text-white sm:text-4xl sm:text-center">80%</dd>
                  </div>
                </div>

                <div class="flex-shrink-0">
                  <div class="ml-4">
                    <dt class="text-lg sm:text-center leading-6 font-medium text-white">Lorem ipsum</dt>
                    <dd class="mt-2 text-3x1 text-red-400 sm:text-4xl sm:text-center">80%</dd>
                  </div>
                </div>

                <div class="flex-shrink-0">
                  <div class="ml-4">
                    <dt class="text-lg sm:text-center leading-6 font-medium text-white">Lorem ipsum</dt>
                    <dd class="mt-2 text-3x1 text-white sm:text-4xl sm:text-center">80%</dd>
                  </div>
                </div> 
              </dl>
            </div>
          </div>
        </div>
      </div>

      <!-- Section red -->
      <!--   <div class="bg-blue-900">
          <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
            <h2 class="text-2xl font-medium tracking-tight text-white sm:text-4xl">
              <span class="block">Descarte seu eletrônico!</span>
              <span class="block text-red-400 text-2x1">E veja os materiais disponíveis para coleta</span>
            </h2>
            <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
              <div class="inline-flex rounded-md shadow">
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-bold rounded-md text-blue-900 bg-white hover:bg-indigo-100">
                  BOTÃO
                </a>
              </div>
              <div class="ml-3 inline-flex rounded-md shadow">
                <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-bold rounded-md text-blue-900 bg-red-400 hover:bg-indigo-100">
                  BOTÃO
                </a>
              </div>
            </div>
          </div>
        </div> -->


      <!-- Section categorias -->
      <div class="py-20 px-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <h2 class="text-base font-medium text-red-400 tracking-wide uppercase">Reciclatown</h2>
            <p class="mt-2 text-3xl leading-8 tracking-tight text-blue-900 sm:text-4xl">
              Quais materiais você vai encontrar por aqui
            </p>
            <p class="mt-4 max-w-2xl text-base text-blue-900 lg:mx-auto">
              Os materiais a serem descartados são divididos em quatro categorias, tendo em vista que os coletores reciclam esses materiais para trabalhos específicos.
            </p>
          </div>

          <div class="mt-10">
            <dl class="space-y-10 md:space-y-0 md:grid md:grid-cols-2 md:gap-x-8 md:gap-y-10">
              <div class="flex">
                <div class="ml-4">
                  <dt class="text-lg leading-6 font-medium text-blue-900 sm:text-2xl">
                    Grande porte
                  </dt>
                  <dd class="mt-2 text-base text-blue-900">
                    Podendo ser geladeiras, freezers, máquinas de lavar, fogões, ar condicionados, microondas, tvs, entre outros.
                  </dd>
                </div>
              </div>

              <div class="flex">
                <div class="ml-4">
                  <dt class="text-lg leading-6 font-medium text-blue-900 sm:text-2xl">
                    Pequeno porte e eletroportáteis
                  </dt>
                  <dd class="mt-2 text-base text-gray-500">
                    Torradeiras, batedeiras, aspiradores de pó, ventiladores, mixers, secadores de cabelo, ferramentas elétricas, calculadoras, câmeras digitais, rádios, etc.
                  </dd>
                </div>
              </div>

              <div class="flex">
                <div class="ml-4">
                  <dt class="text-lg leading-6 font-medium text-blue-900 sm:text-2xl">
                    Relacionados a informática e telefonia
                  </dt>
                  <dd class="mt-2 text-base text-gray-500">
                    Sendo computadores, tablets, notebooks, celulares, impressoras, monitores e outros.
                  </dd>
                </div>
              </div>

              <div class="flex">
                <div class="ml-4">
                  <dt class="text-lg leading-6 font-medium text-blue-900 sm:text-2xl">
                    Pilhas e baterias portáteis
                  </dt>
                  <dd class="mt-2 text-base text-gray-500">
                    Pilhas modelos AA, AAA, recarregáveis, baterias portáteis de 9 V, entre outras.
                  </dd>
                </div>
              </div>
            </dl>
          </div>
        </div>
      </div>

       <!-- Section red -->
     <!--  <div class="bg-white">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
          <h2 class="text-2xl font-medium tracking-tight text-blue-900 sm:text-4xl">
            <span class="block">Descarte seu eletrônico!</span>
            <span class="block text-red-400 text-2x1">E veja os materiais disponíveis para coleta</span>
          </h2>
          <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="inline-flex rounded-md shadow">
              <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-bold rounded-md text-white hover:text-blue-900 bg-blue-900 hover:bg-indigo-100">
                BOTÃO
              </a>
            </div>
            <div class="ml-3 inline-flex rounded-md shadow">
              <a href="#" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-bold rounded-md text-blue-900 bg-red-400 hover:bg-indigo-100">
                BOTÃO
              </a>
            </div>
          </div>
        </div>
      </div> -->

      <div class="bg-blue-900">
        <div class="max-w-7xl mx-auto py-12 px-4 sm:px-6 lg:py-16 lg:px-8 lg:flex lg:items-center lg:justify-between">
          <h2 class="text-2xl tracking-tight text-white sm:text-lg">
            <span class="block">2021 Reciclatown.Todos os direitos reservados</span>
          </h2>
          <div class="mt-8 flex lg:mt-0 lg:flex-shrink-0">
            <div class="ml-3 inline-flex rounded-md shadow">
              <a href="https://github.com/suelensalvino/Reciclatown" target="_blank" class="inline-flex items-center justify-center px-5 py-3 border border-transparent text-base font-medium rounded-md text-red-400 hover:text-red-500">     
                Github
              </a>
            </div>
          </div>
        </div>
      </div>

       <!-- This example requires Tailwind CSS v2.0+ -->
<!--       <div class="overflow-hidden">
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
      </div> -->
    </body>
</html>
