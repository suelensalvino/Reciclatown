 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <!--Informações perfil-->
  <div class="mb-6 bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
     {{ __('Informações do usuário') }}
     @include('dados')
   </div>
 </div>
 <!--Informações produto-->
 <div class="mb-4 grid grid-cols-2 gap-4"><!--Pesquisa - selects - adicionar-->
  <!---Pesquisa--->  
  <div class="w-full">
    <div class="mt-1 shadow-inner py-2 px-2 text-green-500 font-semibold rounded bg-white flex border border-gray-200 rounded-lg">
      <input placeholder="Pesquisar..." class="p-1 px-2 appearance-none outline-none w-full text-gray-800">
      <div class="text-gray-300 w-8 py-1 pl-2 pr-1 border-l flex items-center border-gray-200">
        <button class="cursor-pointer w-6 h-6 text-gray-600 outline-none focus:outline-none">
          <svg class="h-4 w-4 fill-current" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 56.966 56.966" style="enable-background:new 0 0 56.966 56.966;" xml:space="preserve" width="512px" height="512px">
            <path d="M55.146,51.887L41.588,37.786c3.486-4.144,5.396-9.358,5.396-14.786c0-12.682-10.318-23-23-23s-23,10.318-23,23  s10.318,23,23,23c4.761,0,9.298-1.436,13.177-4.162l13.661,14.208c0.571,0.593,1.339,0.92,2.162,0.92  c0.779,0,1.518-0.297,2.079-0.837C56.255,54.982,56.293,53.08,55.146,51.887z M23.984,6c9.374,0,17,7.626,17,17s-7.626,17-17,17  s-17-7.626-17-17S14.61,6,23.984,6z"/>
          </svg>
        </button>
      </div>
    </div>
  </div>
  <div class="grid grid-cols-3"><!--   ''  - selects - adicionar-->
    <!---Select filtro---> 
    <div class="m-1" >
      <select id="tipo_produto" class="block mt-1 w-full shadow-md rounded-lg py-2 px-4 bg-white text-gray-600 font-semibold flex border border-transparent" type="text" name="categoria" required x-model="categoria" >
       <option class="block mt-1 w-full" value="">Selecione um filtro</option>
       @foreach(Auth::user()->categorias as $categoria)
       <option class="block mt-1 w-full"  value="{{$categoria->id}}" >{{$categoria->tipo}}</option>
       @endforeach
     </select>
   </div>
   <!---Ordenar por--->
   <div class="m-1" >
    <select id="tipo_produto" class="block mt-1 w-full shadow-md rounded-lg py-2 px-4 bg-white text-gray-600 font-semibold flex border border-transparent" type="text" name="" required x-model="categoria" >
     <option class="block mt-1 w-full" value="">Ordenar por</option>
     <option class="block mt-1 w-full"  value="">Mais Recente para Mais Antigo</option>
     <option class="block mt-1 w-full"  value="">Mais Antigo para Mais Recente</option>
    </select>
  </div>
 <!---Botão de adcionar--->
 <div  x-data= "{ add_modal: false}">
   <div class="m-1" >
    <div class="shadow-md py-2 px-4 bg-green-100 text-green-500 font-semibold border border-green-200 rounded hover:bg-green-500 hover:text-white hover:border-transparent transition ease-in duration-200 transform hover:-translate-y-1 active:translate-y-0 p-3 m-0.5 border rounded-lg cursor-pointer" @click="add_modal = true">
      Adicionar
    </div>
  </div>
  <!--MODAL adiconar-->
  <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="add_modal"   >
    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      <!-- sobreposição do plano de fundo de acordo com o modal -->
      <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="add_modal = false">
        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
      </div>
      <!-- centraliza o conteudo do modal -->
      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full py-3 px-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
       <h1 class="text-lg">Adicionar produto para descarte</h1>
       <form action="{{route('novo_produto')}}" method="POST">
         @csrf

         <!-- tipo_produto -->
         <div class="mt-4" x-data="{categoria: ''}" >
          <x-label for="tipo_produto" :value="__('Categoria')" />
          <template x-if="categoria != 'outro'">
            <div>
              <x-select id="tipo_produto" class="block mt-1 w-full" type="text" name="categoria"   required x-model="categoria" >
               <option class="block mt-1 w-full" value="">--------</option>
               @foreach(Auth::user()->categorias as $categoria)
               <option class="block mt-1 w-full"  value="{{$categoria->id}}" >{{$categoria->tipo}}</option>
               @endforeach
               <option class="block mt-1 w-full" value="0">Outro</option>
             </x-select>
           </div>
           <!--outra categoria -->
           <template x-if="categoria == '0'">
            <div class="mt-4">
              <x-input id="cate_outra" class="block mt-1 w-full" type="text" name="cate_outra" :value="old('cate_outra')" min="1" required />
            </div>
          </template>
        </template>
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

      <!--Botões-->
      <div class="flex items-center justify-end mt-4">
        <a class="underline text-sm hover:text-red-500 cursor-pointer"  @click="add_modal = false">
          {{ __('Cancelar') }}
        </a>
        <x-button class="ml-4 bg-green-100 text-green-500 font-semibold border border-green-200 hover:shadow-md hover:bg-green-500 hover:text-white hover:border-transparent">
          {{ __('Adicionar') }}
        </x-button>
      </div>

    </form>
  </div> 
</div>
</div><!--Final modal adicionar-->
</div><!--Final botão adicionar-->
</div><!--Final  ''  - selects - adicionar-->
</div><!--Final Pesquisa - selects - adicionar--->
<!---Listanto os produtos de descarte do usuário--->
<div class="flex flex-col"> <!---Tabela---> 
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="min-w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Produto
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Descrição
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
              <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Quant.
              </th>
              <th scope="col" class="relative px-6 py-3">
                <span class="sr-only">Visualizar</span>
              </th>
            </tr>
          </thead>
          <!--Corpo da tabela com as info listadas -->
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach(Auth::user()->Produtos as $produto)
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$produto->categoria->tipo}}</div>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$produto->descricao}}</div>
              </td>
              <td class="px-3 py-4 whitespace-nowrap">
                <span class="bg-green-200 text-green-600 border border-green-600 py-1 px-2 rounded-full text-xs">
                  Disponível
                </span>
              </td>
              <td class="px-6 py-4 whitespace-nowrap">
               <div class="text-sm text-gray-900">{{ $produto->quantidade}}</div>
             </td>
             <!--Celula com ícones de edição e excluir -->
             <td class="px-6 py-4 whitespace-nowrap text-center">
              <div class="flex item-center justify-center">
                <!--Botão de editar -->
                <div x-data="{modal_editar: false}">
                  <!--Ícone -->
                  <div class="w-4 mr-4 transform hover:text-blue-500 hover:scale-110" @click="modal_editar = true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                    </svg>
                  </div>
                  <!-- MODAL de editar -->
                  <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="modal_editar">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                      <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="modal_editar = false">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                      </div>
                      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-3" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                        <div>
                          <form action="{{ route('update-produto', $produto) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="m-3">
                              <x-label for="quantidade" :value="__('Quantidade')" />
                              <x-input id="quantidade" class="block mt-1 w-full" type="number" name="quantidade" :value="old('quantidade')" required/>
                            </div>
                            <div class="m-3">
                              <x-label for="descricao" :value="__('Descrição')" />
                              <x-input id="descricao" class="block mt-1 w-full" type="Text" name="descricao" :value="old('descricao')" required/>
                            </div>
                            <div class="flex items-center justify-end mt-4">
                              <div class="flex items-center justify-center mt-4">
                                <a class="underline text-sm hover:text-red-500 cursor-pointer" @click="modal_editar = false">
                                  {{ __('Cancelar') }}
                                </a>
                                <x-button class="ml-4 bg-blue-100 text-blue-500 font-semibold border border-blue-200 hover:bg-blue-500 hover:text-white hover:border-transparent hover:shadow-md">
                                  {{ __('Editar') }}
                                </x-button>
                              </div>
                            </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Botão de excluir -->
                <div x-data ="{modal_excluir: false }">
                  <!-- Ìcone -->
                  <div class="w-4 mr-2 transform hover:text-red-500 hover:scale-110" @click="modal_excluir = true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                    </svg>
                  </div>
                  <!--MODAL de excluir -->
                  <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="modal_excluir">
                    <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                      <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="modal_excluir = false">
                        <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                      </div>
                      <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                      <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full py-10" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                        <div>
                          <h1 class="text-lg text-center">Deseja realmente excluir este produto?</h1>
                          <div class="flex items-center justify-center mt-4 p-4">
                            <a class="px-4 py-2 bg-white text-sm text-gray border border-gray-300 rounded-lg hover:bg-blue-500 hover:text-white hover:border-transparenttext-sm cursor-pointer hover:shadow-md mr-4" @click="modal_excluir = false">
                              {{ __('Cancelar') }}
                            </a>
                            <a class="px-4 py-2 bg-red-100 text-sm text-red-500 border border-red-200 rounded-lg hover:bg-red-500 hover:text-white hover:border-transparenttext-sm hover:shadow-md cursor-pointer mr-4" href="{{route('rm-produto', $produto)}}">
                              {{ __('Excluir') }}
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Final da célula -->
              </div>
            </td>
          </tr>
        </div>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
</div>
<!--Final da conteúdo pág -->
</div>
