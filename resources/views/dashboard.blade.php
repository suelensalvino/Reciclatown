<x-app-layout>
  
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Meu perfil') }}
    </h2>
  </x-slot>

  <div class="py-4" >
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 m-2">
    <div class="p-6 bg-white border-b border-gray-200">
      @if(Auth::user()->tipo == "coletor")
        {{ __('Informações do Coletor(a)') }} 
      @else
        {{ __('Informações do usuário') }}
      @endif

      @include('coletor')
      @include('dados') 
   
    @php 
    $coletor = Auth::user()->tipo;
    @endphp
        
   </div>
 </div>
   

    <!-- verificando se o usuario logado é um coletor-->
    @if($coletor === "coletor")
      <div>
        <!-- aqui ficara o include do coletor-->

        @include('confirma-agendamento')
      </div>
    <!-- verificando se o usuario logado é um usuario-->
    @elseif($coletor !=="coletor")
      <div>
        @include('produto')
      </div> 
    @endif
  </div>

</x-app-layout>
