<x-app-layout>
  
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Meu perfil') }}
    </h2>
  </x-slot>

  <div class="py-4" >
    @php 
    $coletor = Auth::user()->tipo;
    @endphp

    <!-- verificando se o usuario logado é um coletor-->
    @if($coletor === "coletor")
      <div>
        <!-- aqui ficara o include do coletor-->
        @include('tabela-agendamento')
      </div>
    <!-- verificando se o usuario logado é um usuario-->
    @elseif($coletor !=="coletor")
      <div>
        @include('produto')
      </div> 
      @include('tabela-confirma-usuario')
    @endif
  </div>

</x-app-layout>
