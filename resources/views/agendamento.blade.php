 <div  x-data= "{ agendamento: false}">
   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200">
        <div class="grid grid-cols-4"> 
         @php
         $users= DB::table('users')->where('tipo', 'coletor')->get();
         $categorias= DB::table('categorias')->where('user_id', Auth::User()->id)->get();
         $produtos= DB::table('produtos')->where('user_id', Auth::User()->id)->get();
         @endphp
         <div class="p-3 m-0.5 border rounded-lg bg-blue-100 hover:bg-blue-200 cursor-pointer" @click="agendamento = true">
          Novo Agendamento
        </div>
        @foreach($produtos as $produto)
        @php
        $agendamentos = DB::table('agendamentos')->where('produtos_id', $produto->id)->get();
        
        @endphp
        @foreach($agendamentos as $agendamento)
        <div class="p-3 m-1 border rounded-lg hover:bg-gray-200 ">
          Horario: {{$agendamento->horario}}
          <br>
          Local: {{$agendamento->local}}
        </div>
        @endforeach
        @endforeach
      </div>
    </div>
  </div>
</div>
<div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="agendamento"   >
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--  sobreposição do pano de fundo de acordo com o modal -->

    <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="agendamento = false">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>

    <!-- centraliza o conteudo do modal. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
    <!--
     painel do modal

      Entering: "ease-out duration-300"
        From: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
        To: "opacity-100 translate-y-0 sm:scale-100"
      Leaving: "ease-in duration-200"
        From: "opacity-100 translate-y-0 sm:scale-100"
        To: "opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
      -->
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-3" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div>
          <h1 class="text-center">Novo Agendamento</h1>
          <form action="{{route('novo_agendamento')}}"  method="Post">
           @csrf
           
           <x-label for="produtos" :value="__('Produtos Para Descarte')" />

           <x-select id="produtos" class="block mt-1 w-full" type="text" name="produtos"   required  >


            @foreach($categorias as $categoria)
            <option class="block mt-1 w-full"  value="{{$categoria->id}}" >{{$categoria->tipo}}</option>
            @endforeach
            
          </x-select>
          <x-label for="Local" :value="__('Local de Descarte')" />
          <div class="mt-4">
            <x-input id="local" class="block mt-1 w-full" type="text" name="local" :value="old('local')" required />
          </div>

          <x-label for="horario" :value="__('Determine Uma Disponibilidade Para a Coleta')" />
          <div class="mt-4">
            <x-textarea id="horario" class="block mt-1 w-full" type="text" name="horario" :value="old('horario')" required />
          </div>
          
          
          <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-red-500 hover:text-red-500 cursor-pointer" @click="agendamento = false"   >
              {{ __('Cancelar') }}
            </a>
            <x-button class="ml-4">
              {{ __('Agendar') }}
            </x-button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

