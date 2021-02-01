<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <!---listanto os produtos de descarte do usuário--->

          <div class="grid grid-cols-4"> 
           @foreach(Auth::user()->Categorias as $categoria)
           @foreach(Auth::user()->Produtos as $produto)
           
           <div class="p-3 m-1 border rounded-lg hover:bg-gray-200 ">
             Produto: {{$categoria->tipo}}  
             <br>
             Quantidade disponível: {{ $produto->quantidade}}
             
             <div class="m-0.5 border rounded-lg">

              <div class="grid grid-cols text-center">

                <a class="bg-red 200 rounded-lg hover:bg-red-300" href="{{route('rm-produto', $categoria, $produto)}}">Excluir</a>

              </div>

            </div>
          </div>

          @endforeach
          @endforeach

        </div>
      </div>
    </div>
  </div>
</div>
</x-app-layout>