<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <link rel="stylesheet" href="../css/app.css">

    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen dark:bg-gray-900 sm:items-center sm:pt-0">
            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="bg-auto bg-no-repeat bg-right md:min-h-screen" style="background-image: url(../img/bg.jpg)">
            <div class="grid grid-cols-1 lg:grid-cols-2">
                <div class=" bg-blue-900 lg:min-h-screen lg:flex lg:items-center p-8 sm:p-12">
                    <div class="flex-grow">
                        <h2 class="text-left text-red-400 text-2xl font-display ">Logo</h2>
                        <h1 class="whitespace-pre-line text-left text-red-400 text-4xl font-display">
                            Reciclatown é um serviço online <br> de descarte e coleta de lixo eletrônico
                        </h1>
                        <p class="whitespace-pre-line flex-white text-left text-white text-2xl font-display">
                            Nosso intuíto é fazer da tecnologia nossa aliada <br> na sustentabilidade
                        </p>
                        <li class="flex rounded-lg m-10 px-40 ">
                            <a href="/dashboard" class=" flex items-center justify-center bg-transparent text-red-400 text-2xl px-8 py-4 hover:border-red-400  border-2 ">Saiba Mais</a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
