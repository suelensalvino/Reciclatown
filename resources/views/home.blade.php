<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Reciclatown</title>
  <link rel="stylesheet" href="../css/app.css">
</head>
<body>
  <x-app-layout>
    <x-slot name="header">
      <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ __('Produtos para coleta') }}
      </h2>
    </x-slot>
    <div class="py-4" >
     <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
       <!--Informações produto-->
       <div class="mb-4 grid grid-cols-2 gap-3"><!--Pesquisa - selects - adicionar-->
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
        <div class="grid grid-cols-2"><!--   ''  - selects -->
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
     </div><!--Final  ''  - selects -->
   </div><!--Final Pesquisa - selects--->
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
               <!--Celula com ícones de visualizar-->
               <td class="px-6 py-4 whitespace-nowrap text-center">
                <div class="flex item-center justify-center space-x-4">
                  <!--Botão de visualização -->
                  <div x-data ="{modal_visualizar: false }">
                    <!-- Ìcone -->
                    <div class="transform hover:text-blue-500 hover:scale-110" @click="modal_visualizar = true">
                      <p class="flex items-center px-4 py-2 text-sm">
                        <svg width="20" height="20" class="mr-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                        </svg>
                        Visualizar
                      </p>
                    </div>
                    <!--MODAL de visualização -->
                    <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="modal_visualizar">
                      <div class="flex items-end justify-center min-h-screen py-4 px-4 pb-20 text-center sm:block sm:p-0">
                        <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="modal_visualizar = false">
                          <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                        </div>
                        <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
                        <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full py-6 px-6" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                          <div>
                            <h1 class="text-2xl mb-2">Informações Produto</h1>
                              <div class="w-3/4 mb-6">
                                <p class="text-sm whitespace-normal leading-snug text-left">Lorem ipsum dolor sit amet. Ex sint nostrum ut temporibus quas quo suscipit inventore? Est nobis quam rem voluptatem dolorem rem inventore incidunt qui dolore veritatis. Et dolor quae et tempora rerum qui praesentium magni. Ea repellendus fuga et natus quod id aliquam soluta ut nostrum numquam.</p>
                              </div>

                            <h1 class="text-2xl mb-2">Informações Usuário e agendamento</h1>
                              <div class="w-3/4 mb-4">
                                <p class="text-sm whitespace-normal leading-snug text-left">Lorem ipsum dolor sit amet. Ex sint nostrum ut temporibus quas quo suscipit inventore? Est nobis quam rem voluptatem dolorem rem inventore incidunt qui dolore veritatis. Et dolor quae et tempora rerum qui praesentium magni. Ea repellendus fuga et natus quod id aliquam soluta ut nostrum numquam.</p>
                              </div>

                            <div class="flex items-center justify-end mt-4">
                              <a class="px-4 py-2 bg-white text-sm text-gray border border-gray-300 rounded-lg hover:bg-blue-500 hover:text-white hover:border-transparenttext-sm cursor-pointer hover:shadow-md" @click="modal_visualizar = false">
                                {{ __('Voltar') }}
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

</div>
</x-app-layout>
</body>
</html>