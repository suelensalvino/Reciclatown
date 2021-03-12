<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <title>Reciclatown</title>
  <link rel="stylesheet" href="../css/app.css">
  <link rel="icon" type="imagem/png" href="../img/logo-r.png" />
</head>

<body>  
  <header class="bg-white">
    <div class="pt-6 px-4 sm:px-6 lg:px-8 shadow-none">
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
        <div class="bg-white lg:absolute lg:right-0 lg:w-1/2">
          <img class="object-contain object-left-bottom w-full h-96 lg:w-full" src="../img/bg1.png" alt="">
        </div>
        <div class="relative lg:max-w-2xl lg:w-screen lg:px-20 ">
          <div class="sm:text-center lg:text-center lg:px-12 py-14">
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
    </div>         

    <!-- Section blue -->
    <div class="py-14 bg-blue-900">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="lg:text-center">
          <div class="flex items-center justify-center py-2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" class="animate-bounce w-6 h-6 text-white" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3" />
            </svg>
          </div>
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
    <div class="py-14 bg-red-400">
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
                  <dd class="mt-2 text-3x1 text-blue-900 sm:text-4xl sm:text-center">80%</dd>
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
                  <dd class="mt-2 text-3x1 text-blue-900 sm:text-4xl sm:text-center">80%</dd>
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
              <span class="block text-blue-900 text-2x1">E veja os materiais disponíveis para coleta</span>
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
        <div class="py-14 px-20 bg-white">
          <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="lg:text-center">
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

      <!-- Sobre -->
      <div class="py-10 bg-blue-900">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
          <div class="lg:text-center">
            <p class="mb-4 text-3xl leading-8 tracking-tight text-white sm:text-4xl">
              Quem somos?
            </p>
            <p class="mb-32 text-base tracking-tight text-white whitespace-normal leading-snug">
              Estudantes do 3º período do curso Informática para Internet no IFPE campus Igarassu,
              criamos esse site <br> por meio da disciplina de Projeto e Prática 2,
              ministrada pelos professores Liliane Alves e Ranieri Valença
            </p>
            <!--Cleicy-->
            <div class="p-4 relative">
              <div class="mb-32 flex items-center flex-col md:flex-row justify evenly">
                <div class="p-4 relative">
                  <div class="text-center mb-4 absolute -top-16 right-1/2 transform translate-x-1/2">

                    <a href="#" class="block relative">
                      <img alt="profil" src="../img/cleicy.jpg" class="mx-auto object-cover rounded-lg h-40 w-40  border-2 border-white dark:border-gray-800"/>
                    </a>
                  </div>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow px-8 py-4 pt-24">
                    <div class="text-center">
                      <p class="text-2xl text-gray-800 dark:text-white">
                        Cleicy Kerolim
                      </p>
                      <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                        Front-end
                      </p>
                    </div>
                    <div class="pt-8 flex border-t border-gray-200 w-40 mx-auto text-gray-500 items-center justify-center">
                      <!--Linkedin-->
                      <a href="https://www.linkedin.com/in/cleicy-kerolim-9a322b1a5/">
                        <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
                          </path>
                        </svg>
                      </a>
                      <!--Git-->
                      <a href="https://github.com/cleicykerolim">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
                          <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                          </path>
                        </svg>
                      </a>
                      <!--Gmail-->
                      <a href="#">
                        <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M464,64h-16H64H48C21.504,64,0,85.504,0,112v16v256v16c0,26.496,21.504,48,48,48h16h384h16c26.496,0,48-21.504,48-48v-16
                            V128v-16C512,85.504,490.496,64,464,64z M407.488,96L256,215.616L104.512,96H407.488z M448,416H64V148.672l192,147.68L448,148.64
                            V416z"/>
                          </g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <!--Danilo-->
              <div class="p-4 relative">
                <div class="text-center mb-4 absolute -top-16 right-1/2 transform translate-x-1/2">
                  <a href="#" class="block relative">
                    <img alt="profil" src="../img/danilo.jpg" class="mx-auto object-cover rounded-lg h-40 w-40  border-2 border-white dark:border-gray-800"/>
                  </a>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow px-8 py-4 pt-24">
                  <div class="text-center">
                    <p class="text-2xl text-gray-800 dark:text-white">
                      Danilo Monteiro
                    </p>
                    <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                      Back-end
                    </p>
                  </div>
                  <div class="pt-8 flex border-t border-gray-200 w-40 mx-auto text-gray-500 items-center justify-center">
                    <!--Linkedin-->
                    <a href="https://www.linkedin.com/in/danilo-monteiro-19b6001a5/">
                      <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
                        </path>
                      </svg>
                    </a>
                    <!--Git-->
                    <a href="https://github.com/DaniloM2">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
                        <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                        </path>
                      </svg>
                    </a>
                    <!--Gmail-->
                    <a href="#">
                      <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M464,64h-16H64H48C21.504,64,0,85.504,0,112v16v256v16c0,26.496,21.504,48,48,48h16h384h16c26.496,0,48-21.504,48-48v-16
                          V128v-16C512,85.504,490.496,64,464,64z M407.488,96L256,215.616L104.512,96H407.488z M448,416H64V148.672l192,147.68L448,148.64
                          V416z"/>
                        </g>
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <!--Desiree-->
            <div class="p-4 relative">
              <div class="text-center mb-4 absolute -top-16 right-1/2 transform translate-x-1/2">
                <a href="#" class="block relative">
                  <img alt="profil" src="../img/desiree.jpg" class="mx-auto object-cover rounded-lg h-40 w-40  border-2 border-white dark:border-gray-800"/>
                </a>
              </div>
              <div class="bg-white dark:bg-gray-800 rounded-lg shadow px-8 py-4 pt-24">
                <div class="text-center">
                  <p class="text-2xl text-gray-800 dark:text-white">
                    Desiree Fernandes
                  </p>
                  <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                    Front-end
                  </p>
                </div>
                <div class="pt-8 flex border-t border-gray-200 w-40 mx-auto text-gray-500 items-center justify-center">
                  <!--Linkedin-->
                  <a href="https://www.linkedin.com/in/desiree-fernandes-a762321a5/">
                    <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
                      </path>
                    </svg>
                  </a>
                  <!--Git-->
                  <a href="https://github.com/desireefernandes">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
                      <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                      </path>
                    </svg>
                  </a>
                  <!--Gmail-->
                  <a href="https://desireefernandes00@gmail.com/">
                    <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                      <g>
                        <path d="M464,64h-16H64H48C21.504,64,0,85.504,0,112v16v256v16c0,26.496,21.504,48,48,48h16h384h16c26.496,0,48-21.504,48-48v-16
                        V128v-16C512,85.504,490.496,64,464,64z M407.488,96L256,215.616L104.512,96H407.488z M448,416H64V148.672l192,147.68L448,148.64
                        V416z"/>
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
            </div>
          </div>
          <!--Eduardo-->
          <div class="p-4 relative">
            <div class="text-center mb-4 absolute -top-16 right-1/2 transform translate-x-1/2">
              <a href="#" class="block relative">
                <img alt="profil" src="../img/eduardo.jpg" class="mx-auto object-cover rounded-lg h-40 w-40  border-2 border-white dark:border-gray-800"/>
              </a>
            </div>
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow px-8 py-4 pt-24">
              <div class="text-center">
                <p class="text-2xl text-gray-800 dark:text-white">
                  Eduardo Bezerra
                </p>
                <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                  Back-end
                </p>
              </div>
              <div class="pt-8 flex border-t border-gray-200 w-40 mx-auto text-gray-500 items-center justify-center">
                <!--Linkedin-->
                <a href="https://www.linkedin.com/in/cleicy-kerolim-9a322b1a5/">
                  <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                    <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
                    </path>
                  </svg>
                </a>
                <!--Git-->
                <a href="https://github.com/cleicykerolim">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
                    <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                    </path>
                  </svg>
                </a>
                <!--Gmail-->
                <a href="#">
                  <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                  viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                      <g>
                        <path d="M464,64h-16H64H48C21.504,64,0,85.504,0,112v16v256v16c0,26.496,21.504,48,48,48h16h384h16c26.496,0,48-21.504,48-48v-16
                        V128v-16C512,85.504,490.496,64,464,64z M407.488,96L256,215.616L104.512,96H407.488z M448,416H64V148.672l192,147.68L448,148.64
                        V416z"/>
                      </g>
                    </g>
                  </svg>
                </a>
             </div>
            </div>
          </div>
            </div>
            <!--outra linha-->
             <div class="flex items-center flex-col md:flex-row justify evenly">
               <!--Everthon-->
                  <div class="p-4 relative">
                    <div class="text-center mb-4 absolute -top-16 right-1/2 transform translate-x-1/2">
                      <a href="#" class="block relative">
                        <img alt="profil" src="../img/everthon.jpg" class="mx-auto object-cover rounded-lg h-40 w-40  border-2 border-white dark:border-gray-800"/>
                      </a>
                    </div>
                    <div class="bg-white dark:bg-gray-800 rounded-lg shadow px-8 py-4 pt-24">
                      <div class="text-center">
                        <p class="text-2xl text-gray-800 dark:text-white">
                          Everthon Barbosa
                        </p>
                        <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                          Back-end
                        </p>
                      </div>
                      <div class="pt-8 flex border-t border-gray-200 w-40 mx-auto text-gray-500 items-center justify-center">
                        <!--Linkedin-->
                        <a href="https://www.linkedin.com/in/everthon-barbosa-442111197/">
                          <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                            <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
                            </path>
                          </svg>
                        </a>
                        <!--Git-->
                        <a href="https://github.com/EverthonH">
                          <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
                            <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                            </path>
                          </svg>
                        </a>
                        <!--Gmail-->
                        <a href="#">
                          <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                          viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                          <g>
                            <g>
                              <path d="M464,64h-16H64H48C21.504,64,0,85.504,0,112v16v256v16c0,26.496,21.504,48,48,48h16h384h16c26.496,0,48-21.504,48-48v-16
                              V128v-16C512,85.504,490.496,64,464,64z M407.488,96L256,215.616L104.512,96H407.488z M448,416H64V148.672l192,147.68L448,148.64
                              V416z"/>
                            </g>
                          </g>
                        </svg>
                      </a>
                    </div>
                  </div>
                </div>
                <!--Fábio-->
                <div class="p-4 relative">
                  <div class="text-center mb-4 absolute -top-16 right-1/2 transform translate-x-1/2">
                    <a href="#" class="block relative">
                      <img alt="profil" src="../img/fabio.jpg" class="mx-auto object-cover rounded-lg h-40 w-40  border-2 border-white dark:border-gray-800"/>
                    </a>
                  </div>
                  <div class="bg-white dark:bg-gray-800 rounded-lg shadow px-8 py-4 pt-24">
                    <div class="text-center">
                      <p class="text-2xl text-gray-800 dark:text-white">
                        Fábio Moura
                      </p>
                      <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                        Back-end
                      </p>
                    </div>
                    <div class="pt-8 flex border-t border-gray-200 w-40 mx-auto text-gray-500 items-center justify-center">
                      <!--Linkedin-->
                      <a href="https://www.linkedin.com/in/f%C3%A1bio-moura-813b3a149/">
                        <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                          <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
                          </path>
                        </svg>
                      </a>
                      <!--Git-->
                      <a href="https://github.com/FabioMouradeFraga">
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
                          <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                          </path>
                        </svg>
                      </a>
                      <!--Gmail-->
                      <a href="#">
                        <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                        <g>
                          <g>
                            <path d="M464,64h-16H64H48C21.504,64,0,85.504,0,112v16v256v16c0,26.496,21.504,48,48,48h16h384h16c26.496,0,48-21.504,48-48v-16
                            V128v-16C512,85.504,490.496,64,464,64z M407.488,96L256,215.616L104.512,96H407.488z M448,416H64V148.672l192,147.68L448,148.64
                            V416z"/>
                          </g>
                        </g>
                      </svg>
                    </a>
                  </div>
                </div>
              </div>
              <!--Huanderson-->
              <div class="p-4 relative">
                <div class="text-center mb-4 absolute -top-16 right-1/2 transform translate-x-1/2">
                  <a href="#" class="block relative">
                    <img alt="profil" src="../img/huanderson.jpg" class="mx-auto object-cover rounded-lg h-40 w-40  border-2 border-white dark:border-gray-800"/>
                  </a>
                </div>
                <div class="bg-white dark:bg-gray-800 rounded-lg shadow px-8 py-4 pt-24">
                  <div class="text-center">
                    <p class="text-2xl text-gray-800 dark:text-white">
                      Huanderson Lima
                    </p>
                    <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                      Back-end
                    </p>
                  </div>
                  <div class="pt-8 flex border-t border-gray-200 w-40 mx-auto text-gray-500 items-center justify-center">
                    <!--Linkedin-->
                    <a href="#">
                      <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                        <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
                        </path>
                      </svg>
                    </a>
                    <!--Git-->
                    <a href="https://github.com/huandersonlima">
                      <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
                        <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                        </path>
                      </svg>
                    </a>
                    <!--Gmail-->
                    <a href="#">
                      <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                      viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                      <g>
                        <g>
                          <path d="M464,64h-16H64H48C21.504,64,0,85.504,0,112v16v256v16c0,26.496,21.504,48,48,48h16h384h16c26.496,0,48-21.504,48-48v-16
                          V128v-16C512,85.504,490.496,64,464,64z M407.488,96L256,215.616L104.512,96H407.488z M448,416H64V148.672l192,147.68L448,148.64
                          V416z"/>
                        </g>
                      </g>
                    </svg>
                  </a>
                </div>
              </div>
            </div>
            <!--Suelen-->
            <div class="p-4 relative">
              <div class="text-center mb-4 absolute -top-16 right-1/2 transform translate-x-1/2">
                <a href="#" class="block relative">
                  <img alt="profil" src="../img/suelen.jpg" class="mx-auto object-cover rounded-lg h-40 w-40  border-2 border-white dark:border-gray-800"/>
                </a>
              </div>
              <div class="bg-white dark:bg-gray-800 rounded-lg shadow px-8 py-4 pt-24">
                <div class="text-center">
                  <p class="text-2xl text-gray-800 dark:text-white">
                    Suelen Salvino
                  </p>
                  <p class="text-xl text-gray-500 dark:text-gray-200 font-light">
                    Back-end
                  </p>
                </div>
                <div class="pt-8 flex border-t border-gray-200 w-40 mx-auto text-gray-500 items-center justify-center">
                  <!--Linkedin-->
                  <a href="#">
                    <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792" xmlns="http://www.w3.org/2000/svg">
                      <path d="M477 625v991h-330v-991h330zm21-306q1 73-50.5 122t-135.5 49h-2q-82 0-132-49t-50-122q0-74 51.5-122.5t134.5-48.5 133 48.5 51 122.5zm1166 729v568h-329v-530q0-105-40.5-164.5t-126.5-59.5q-63 0-105.5 34.5t-63.5 85.5q-11 30-11 81v553h-329q2-399 2-647t-1-296l-1-48h329v144h-2q20-32 41-56t56.5-52 87-43.5 114.5-15.5q171 0 275 113.5t104 332.5z">
                      </path>
                    </svg>
                  </a>
                  <!--Git-->
                  <a href="https://github.com/suelensalvino">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" viewBox="0 0 1792 1792">
                      <path d="M896 128q209 0 385.5 103t279.5 279.5 103 385.5q0 251-146.5 451.5t-378.5 277.5q-27 5-40-7t-13-30q0-3 .5-76.5t.5-134.5q0-97-52-142 57-6 102.5-18t94-39 81-66.5 53-105 20.5-150.5q0-119-79-206 37-91-8-204-28-9-81 11t-92 44l-38 24q-93-26-192-26t-192 26q-16-11-42.5-27t-83.5-38.5-85-13.5q-45 113-8 204-79 87-79 206 0 85 20.5 150t52.5 105 80.5 67 94 39 102.5 18q-39 36-49 103-21 10-45 15t-57 5-65.5-21.5-55.5-62.5q-19-32-48.5-52t-49.5-24l-20-3q-21 0-29 4.5t-5 11.5 9 14 13 12l7 5q22 10 43.5 38t31.5 51l10 23q13 38 44 61.5t67 30 69.5 7 55.5-3.5l23-4q0 38 .5 88.5t.5 54.5q0 18-13 30t-40 7q-232-77-378.5-277.5t-146.5-451.5q0-209 103-385.5t279.5-279.5 385.5-103zm-477 1103q3-7-7-12-10-3-13 2-3 7 7 12 9 6 13-2zm31 34q7-5-2-16-10-9-16-3-7 5 2 16 10 10 16 3zm30 45q9-7 0-19-8-13-17-6-9 5 0 18t17 7zm42 42q8-8-4-19-12-12-20-3-9 8 4 19 12 12 20 3zm57 25q3-11-13-16-15-4-19 7t13 15q15 6 19-6zm63 5q0-13-17-11-16 0-16 11 0 13 17 11 16 0 16-11zm58-10q-2-11-18-9-16 3-14 15t18 8 14-14z">
                      </path>
                    </svg>
                  </a>
                  <!--Gmail-->
                  <a href="#">
                    <svg width="30" height="30" fill="currentColor" class="mr-2 text-xl hover:text-gray-800 dark:hover:text-white transition-colors duration-200" version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                    <g>
                      <g>
                        <path d="M464,64h-16H64H48C21.504,64,0,85.504,0,112v16v256v16c0,26.496,21.504,48,48,48h16h384h16c26.496,0,48-21.504,48-48v-16
                        V128v-16C512,85.504,490.496,64,464,64z M407.488,96L256,215.616L104.512,96H407.488z M448,416H64V148.672l192,147.68L448,148.64
                        V416z"/>
                      </g>
                    </g>
                  </svg>
                </a>
              </div>
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
      <span class="block"> © 2021 !Perfect Codes - Reciclatown - Todos os direitos reservados
      </span>
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
