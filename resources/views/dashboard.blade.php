<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12" >
     <div>
      <h1 class="block text-center text-xl pb-4">Seus Produtos Para Descarte</h1>
        @include('produto')
      </div>
   
</div>
</x-app-layout>