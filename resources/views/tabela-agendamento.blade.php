<div class="bg-white pt-6  m-8 shadow rounded-md">
  <div class="px-4">
    <h2 class="text-lg leading-6 font-medium text-gray-900 text-center">Tabela Com Todas as Doações</h2>
  </div>
  <div class="bg-white shadow-md rounded my-6 p-4">
    <table class="w-full h-auto table-fixed  border rounded-md">
      <thead class=" border rounded-lg py-3 px-6 ">
        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
          <th class="py-3 px-6 text-left border  border-gray-600 rounded-md">Produto</th>
          <th class="py-3 px-6 text-left border  border-gray-600 rounded-md">Proprietario</th>
          <th class="py-3 px-6 text-center border  border-gray-600 rounded-md">Situação</th>
          <th class="text-center border  border-gray-600 rounded-md ">Disponibilidade</th>
          <th class="py-3 px-6 text-center border  border-gray-600 rounded-md">Ação</th>
        </tr>
      </thead>
      <tbody class="text-gray-600 text-sm font-light ">
       <!-- query pra pega todos os agendamentos join com a tabela de coletor pra pega  somento o coletor-->
       @php
       $agendamentos = DB::table('coletors')->rightJoin('agendamentos', 'agendamentos.coletors_id', '=','coletors.id')->get()->where('coletors_id', Auth::user()->coletors->id);

       @endphp	
       @foreach($agendamentos as $agendamento)
       @php

       $produtos = DB::table('produtos')->rightJoin('categorias', 'categorias.id', '=','produtos.categorias_id')->get();

       @endphp	
       @foreach($produtos as $produto)
       @if($produto->id == $agendamento->produtos_id)
       <tr class="border-b border-gray-200 hover:bg-gray-100 ">
        <td class="py-3 px-6 text-center whitespace-nowrap   border  border-gray-400 ">
         {{$produto->tipo}}({{$produto->quantidade}})
       </td> 
       @php
       $usuarios= DB::table('users')->where('id', $produto->user_id)->get();

       @endphp
       @foreach($usuarios as $usuario)
       <td class="py-2 px-3 text-center whitespace-nowrap   border  border-gray-400 w-3/4  ">
         <div class="whitespace-normal">
           {{$usuario->name}}({{$usuario->cidade}}{{$usuario->bairro}}-{{$usuario->uf}})
         </div>
       </td>
       @endforeach
       <td class="py-3 px-6 text-center whitespace-nowrap   border  border-gray-400 ">
         confirmado
       </td>
       <td class=" text-center whitespace-nowrap   border  border-gray-400 w-3/4 ">
        <div  class="whitespace-normal">
         {{$produto->disponibilidade }}
       </div>
     </td>
     <td class="py-3 px-1 text-center whitespace-nowrap   border  border-gray-400  w-3/4">
      <div class="whitespace-normal">
       <a class="text-sm text-white text-center bg-red-400 rounded-lg cursor-pointer  h-full w-full text-center "  href="{{route('update-agendamento', $agendamento->id)}}">Cancelar</a>
     </div>
   </td>    
 </tr>
 @elseif($produto->id != $agendamento->produtos_id)
 <tr class="border-b border-gray-200 hover:bg-gray-100 ">
  <td class="py-3 px-6 text-center whitespace-nowrap   border  border-gray-400 ">
   {{$produto->tipo}}({{$produto->quantidade}})
 </td> 
 @php
 $usuarios= DB::table('users')->where('id', $produto->user_id)->get();

 @endphp
 @foreach($usuarios as $usuario)
 <td class="py-2 px-3 text-center whitespace-nowrap   border  border-gray-400 w-3/4  ">
   <div class="whitespace-normal">
     {{$usuario->name}}({{$usuario->cidade}}{{$usuario->bairro}}-{{$usuario->uf}})
   </div>
 </td>
 <td class="py-3 px-6 text-center whitespace-nowrap   border  border-gray-400 ">
   disponivel
 </td>
 <td class=" text-center whitespace-nowrap   border  border-gray-400 w-3/4 ">
  <div  class="whitespace-normal">
   {{$produto->disponibilidade }}
 </div>
</td>
<td class="py-3 px-1 text-center whitespace-nowrap   border  border-gray-400  w-3/4">
  <div class="whitespace-normal grid-2 ">
   <div  x-data= "{ agenda: false}">
     <div class="p-3 m-0.5  cursor-pointer" @click="agenda = true">
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
         <form action="{{route('novo_agendamento', $produto->id)}}" method="post">
          @csrf
          <x-label for="horario" :value="__('Agende esse produto')" />
          <div class="mt-4">
            <x-input id="horario" class="block mt-1 w-full" type="text" name="horario" :value="old('horario')" required />
          </div>
          <x-label for="horario" :value="__('Local da coletar')" />
          <div class="mt-4">
            <x-input id="local" class="block mt-1 w-full" type="text" name="local" value="({{$usuario->cidade}}{{$usuario->bairro}}-{{$usuario->uf}})" required />
            </div>
            @endforeach
            <div class="flex items-center justify-end mt-4">
              <a class="underline text-sm text-red-500 hover:text-red-500 cursor-pointer m-3" @click="agenda = false"   >
                {{ __('Cancelar') }}
              </a>
              <input type="submit" class="text-sm text-white bg-blue-400 rounded-lg cursor-pointer h-8 w-15 text-center pt-1 mr-4">
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<div>
 <a class="text-sm text-white text-center bg-red-400 rounded-lg cursor-pointer  h-full w-full text-center "  href="{{route('update-agendamento', $agendamento->id)}}">Recusar</a>
</div>
</div>
</td>    
</tr>
@endif
@endforeach
@endforeach
</tbody>
</table>
</div>
</div>