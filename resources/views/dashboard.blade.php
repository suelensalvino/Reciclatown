<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Dashboard') }}
    </h2>
  </x-slot>

  <div class="py-12"  x-data= "{ add_modal: false}">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
          <!---listanto os produtos de descarte do usuário--->

          <div class="grid grid-cols-4"> 
            <div class="p-3 m-0.5 border rounded-lg bg-blue-100 hover:bg-blue-200 cursor-pointer" @click="add_modal = true">
                Adicionar
             </div>
           @foreach(Auth::user()->Produtos as $produto)
           
           <div class="p-3 m-1 border rounded-lg hover:bg-gray-200 ">
             Produto: {{$produto->categoria->tipo}}  
             <br>
             Descrição: {{$produto->descricao}}  
             <br>
             Quantidade disponível: {{ $produto->quantidade}}
             
             <div class="m-0.5 border rounded-lg">

              <div class="grid grid-cols text-center">

                <a class="bg-red 200 rounded-lg hover:bg-red-300" href="{{route('rm-produto', $produto)}}">Excluir</a>

              </div>

            </div>
          </div>

          @endforeach

        </div>
      </div>
    </div>
  </div>
    <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="add_modal"   >
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--  sobreposição do pano de fundo de acordo com o modal -->

    <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal = false">
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
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
       <div>
           <h1>Adicionar Produto Para Descarte</h1>
           <form action="{{route('novo_produto')}}" method="POST">
             @csrf
               <!-- tipo_produto -->
            <div class="mt-4" x-data="{outro: 1}" >
                <x-label for="tipo_produto" :value="__('Categoria')" />
                <x-select id="tipo_produto" class="block mt-1 w-full" type="text" name="categoria" :value="old('tipo_produto')" required x-modal="" >
                @foreach(Auth::user()->categorias as $categoria)
                  <option class="block mt-1 w-full"  value="{{$categoria->id}}">{{$categoria->tipo}}</option>
                @endforeach
                <option class="block mt-1 w-full" value="0">outro</option>
              </x-select>

            </div>
                  <!-- quantidade -->
            <div class="mt-4">
                <x-label for="quantidade" :value="__('Quantidade')" />

                <x-input id="quantidade" class="block mt-1 w-full" type="number" name="quantidade" :value="old('quantidade')" min="1" required />
            </div>
             <!-- descricao -->
            <div class="mt-4">
                <x-label for="descricao" :value="__('Descricão')" />

                <x-input id="descricao" class="block mt-1 w-full" type="text" name="descricao" :value="old('descricao')" min="1" />
            </div>
             <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-red-500 hover:text-red-500 cursor-pointer" @click="add_modal = false"   >
                        {{ __('Cancelar') }}
                    </a>
                    <x-button class="ml-4">
                        {{ __('Cadastrar') }}
                    </x-button>
            </div>
           </form>
       </div>
    </div>
  </div>
</div>
</div>
</x-app-layout>