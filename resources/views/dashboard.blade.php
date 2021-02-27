<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12" >

    @php 
    $coletor = Auth::user()->tipo;
 
    @endphp
   <!-- verificando se o usuario logado é um coletor-->
    @if($coletor === "coletor")
    
       <!-- aqui ficara o include do coletor-->
       @include('confirma-agendamento')
  
    <!-- verificando se o usuario logado é um usuario-->
    @elseif($coletor !=="coletor")
    <div>
      <h1 class="block text-center text-xl pb-4">Seus produtos para descarte</h1>
        @include('produto')
    </div> 

    @endif
  
</div>
</x-app-layout>