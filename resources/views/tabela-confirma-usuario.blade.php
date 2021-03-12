<div class="bg-white pt-6  m-8 shadow rounded-md">
    <div class="px-4">
        <h2 class="text-lg leading-6 font-medium text-gray-900 text-center">Tabela Com Todas as Solicitações de Agendamento</h2>
    </div> 
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
               coletor responsavel
              </th>
            
              <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                Status
              </th>
              <th scope="col" class="px-4 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">
                horário
              </th>
              <th scope="col" class="relative px-6 py-3">
           olaa
              </th>

            </tr>
          </thead>

          <tbody class="bg-white divide-y divide-gray-200">
    	<!-- query pra pega todos os agendamentos join com a tabela de coletor pra pega  somento o coletor-->
@foreach(\App\Models\Produto::where('user_id', Auth::user()->id)->get() as $produto)
  @foreach(\App\Models\Agendamento::where('produtos_id', $produto->id)->get() as $agendamento)

    
              @if($agendamento->status == 'Aguardando resposta')
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$produto->categoria->tipo}}</div>
              </td>
              
              @foreach(\App\Models\User::where('id', $agendamento->coletors_id)->get() as $coletor)
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$coletor->name}}</div>
              </td>
              @endforeach
               <td class="px-6 py-4 whitespace-nowrap">
                <span class="bg-yellow-200 text-yellow-600 border border-yellow-600 py-1 px-2 rounded-full text-xs">
                  {{$agendamento->status}}
                </span>
              </td>
               <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$agendamento->horario}}</div>
              </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="grid grid-cols-2">
                    <div  x-data="{ aceitar: false}">
                      <div class="p-2 m-0.5 bg-green-200 text-green-600 border border-green-600 py-0.2 px-0.2 text-center rounded-full text-xs cursor-pointer" @click="aceitar = true">
                          aceitar
                      </div>
                              <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="aceitar">
                                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                  <!--  sobreposição do pano de fundo de acordo com o modal -->

                                  <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="aceitar = false">
                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                  </div>


                                  <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>


                                  <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-3" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                    <h1 class="text-lg text-center">Deseja aceitar esse agendamento</h1>
                                      <div class="flex items-center justify-center mt-4 p-4">
                            <a class="px-4 py-2 bg-white text-sm text-gray border border-gray-300 rounded-lg hover:bg-blue-500 hover:text-white hover:border-transparenttext-sm cursor-pointer hover:shadow-md mr-4" @click="recusar = false">
                              {{ __('Cancelar') }}
                            </a>
                            <a class="px-4 py-2 bg-green-100 text-sm text-green-500 border border-green-200 rounded-lg hover:bg-green-500 hover:text-white hover:border-transparenttext-sm hover:shadow-md cursor-pointer mr-4" href="{{route('update-agendamento', $agendamento)}}" >
                              {{ __('Aceitar') }}
                            </a>
                          </div>

                                  </div>
                                </div>
           
                </div>
                    </div>
                      <div  x-data="{ recusar: false}">
                      <div class="p-2 m-0.5 bg-red-200 text-red-600 border border-red-600 py-0.2 px-0.2 text-center rounded-full text-xs cursor-pointer" @click="recusar = true">
                         recusar
                      </div>
                              <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="recusar">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
    <!--  sobreposição do pano de fundo de acordo com o modal -->

    <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="recusar = false">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>


    <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
   
    
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-3" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <h1 class="text-lg text-center">Recursar esse agendamento</h1>
       <div class="flex items-center justify-center mt-4 p-4">
                            <a class="px-4 py-2 bg-white text-sm text-gray border border-gray-300 rounded-lg hover:bg-blue-500 hover:text-white hover:border-transparenttext-sm cursor-pointer hover:shadow-md mr-4" @click="recusar = false">
                              {{ __('Cancelar') }}
                            </a>
                            <a class="px-4 py-2 bg-red-100 text-sm text-red-500 border border-red-200 rounded-lg hover:bg-red-500 hover:text-white hover:border-transparenttext-sm hover:shadow-md cursor-pointer mr-4" href="{{route('rm-agendamento', $agendamento)}}" >
                              {{ __('Recursa') }}
                            </a>
                          </div>

    </div>
  </div>
           
                </div>
                    </div>
                </div>
              </td>
              @elseif($agendamento->status == 'confirmado')
               <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$produto->categoria->tipo}}</div>
              </td>
          
              @foreach(\App\Models\User::where('id', $agendamento->coletors_id)->get() as $coletor)
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$coletor->name}}</div>
              </td>
              @endforeach
               <td class="px-6 py-4 whitespace-nowrap">
                <span class="bg-blue-200 text-blue-600 border border-blue-600 py-1 px-2 rounded-full text-xs">
                  {{$agendamento->status}}
                </span>
              </td>
               <td class="px-6 py-4 whitespace-nowrap">
                <div class="text-sm text-gray-900">{{$agendamento->horario}}</div>
              </td>
                <td class="px-6 py-4 whitespace-nowrap">
                   <div  x-data="{ excluir: false}">
                <div class="p-2 m-0.5 bg-red-200 text-red-600 border border-red-600 py-0.2 px-0.2 text-center rounded-full text-xs cursor-pointer" @click="excluir = true">
                         excluir
                      </div>
                           <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="excluir">
                                <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                  <!--  sobreposição do pano de fundo de acordo com o modal -->

                                  <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="excluir = false">
                                    <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
                                  </div>


                                  <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>


                                  <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-3" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
                                    <h1 class="text-lg text-center">Deseja excluir esse agendamento</h1>
                                      <div class="flex items-center justify-center mt-4 p-4">
                            <a class="px-4 py-2 bg-white text-sm text-gray border border-gray-300 rounded-lg hover:bg-blue-500 hover:text-white hover:border-transparenttext-sm cursor-pointer hover:shadow-md mr-4" @click="excluir = false">
                              {{ __('Cancelar') }}
                            </a>
                            <a class="px-4 py-2 bg-red-100 text-sm text-red-500 border border-red-200 rounded-lg hover:bg-red-500 hover:text-white hover:border-transparenttext-sm hover:shadow-md cursor-pointer mr-4" href="{{route('rm-agendamento', $agendamento)}}" >
                              {{ __('Excluir') }}
                            </a>
                          </div>

                                  </div>
                                </div>
           
                </div>
                  </div>
              </td>
                @endif

            </tr>
             @endforeach
                      @endforeach
          </tbody>
      </table>
    </div>
  </div>
</div>
</div>