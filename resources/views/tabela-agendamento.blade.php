<div class="bg-white pt-6  m-8 shadow rounded-md">
    <div class="px-4">
        <h2 class="text-lg leading-6 font-medium text-gray-900 text-center">Tabela Com Todas as Doações</h2>
    </div> <!---Tabela--->  
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="w-full divide-y divide-gray-200">
          <thead class="bg-gray-50">
            <tr>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Produto
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Proprietario
              </th>
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Disponibilidade
              </th>
              <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Situação.
              </th>
              <th scope="col" class="relative px-6 py-3">
            
              </th>
            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">
    	<!-- query pra pega todos os agendamentos join com a tabela de coletor pra pega  somento o coletor-->
@foreach(\App\Models\Produto::all() as $produto)
	@if(!$produto->existe_agendamento())
    
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$produto->categoria->tipo}}</div>
              </td>
               <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$produto->user->name}}</div>
              </td>
               <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$produto->disponibilidade}}</div>
              </td>
               <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{__('disponivel')}}</div>
              </td>
               <td class="px-6 py-4 whitespace-nowrap">
                 <div  x-data="{ agenda: false}">
                  <div class="ml-4 bg-blue-100 text-blue-500 font-semibold border border-blue-200 hover:bg-blue-500 hover:text-white hover:border-transparent hover:shadow-md text-center px-2 cursor-pointer rounded-md " @click="agenda = true">
                      Agendar
                  </div>
               <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="agenda">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--  sobreposição do pano de fundo de acordo com o modal -->

    <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="agenda = false">
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
        <h1 class="text-center">Solicitar Essa Coletar?</h1>
        <form action="{{route('novo_agendamento', $produto)}}" method="post">
      @csrf

          <x-label for="horario" :value="__('Agende esse produto')" />
                  <div class="mt-4">
                <x-input id="horario" class="block mt-1 w-full" type="text" name="horario" :value="old('horario')" required />
                  </div>
                  <x-label for="horario" :value="__('Local da coletar')" />
                  <div class="mt-4">
                <x-input id="local" class="block mt-1 w-full" type="text" name="local" value="{{$produto->user->cidade}}{{$produto->user->bairro}}-{{$produto->user->uf}}" required />
                  </div>
                     <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-red-500 hover:text-red-500 cursor-pointer" @click="agendamento = false"   >
                        {{ __('Cancelar') }}
                    </a>
                    <x-button class="ml-4 bg-blue-100 text-blue-500 font-semibold border border-blue-200 hover:bg-blue-500 hover:text-white hover:border-transparent hover:shadow-md">
                        {{ __('Agendar') }}
                    </x-button>
            </div>
         </form>
      </div>
    </div>
  </div>
           
                </div>
             </div>

              </td>

            
             </div>

            </tr>
             @endif
                      @endforeach
          </tbody>
      </table>
    </div>
  </div>
</div>
</div>