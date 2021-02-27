   <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
        <div class="p-6 bg-white border-b border-gray-200">
        	<div class="grid grid-cols-2">
        	

	        			@php
                     	$agendamentos= DB::table('agendamentos')->where('coletors_id', null)->get();
                    	@endphp	

                    	@foreach($agendamentos as $agendamento)
                    	@php
                     	
          $produtos = DB::table('produtos')->rightJoin('categorias', 'categorias.id', '=','produtos.categorias_id')->get()->where('id', $agendamento->produtos_id);
  
                    	@endphp	
                    	@foreach($produtos as $produto)
	        		<div class="p-3 m-1 border rounded-lg hover:bg-gray-200 "  x-data ="{agenda: false }">
      	        				Produto: {{$produto->tipo}}
      	        				<br>
                    		Agendamento: {{$agendamento->horario }}
                    		<br>
                    		Local: {{$agendamento->local}}
                    		<br>
                    		Quantidade do produto: {{$produto->quantidade}}
                    		<br>
                    		@if($produto->descricao != '')
                    		Descrição do produto: {{$produto->descricao}}
                    		@endif
                    		<div class="m-0.5 border rounded-lg" >

              <div class="p-3 m-0.5 border rounded-lg bg-blue-100 hover:bg-blue-200 cursor-pointer" @click="agenda = true">
                Agendar
             </div>

            </div>
             <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="agenda"   >
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
      <div >   
        <h1 class="text-center">Se Comprometer a esse Produto</h1>
           <div class="flex items-center justify-center mt-4 p-4">
          
                    <a class="underline text-sm text-red-500 hover:text-red-500 cursor-pointer mr-4" @click="agenda = false"   >
                        {{ __('Cancelar') }}
                    </a>
                    <a class="text-sm text-white bg-blue-400 rounded-lg cursor-pointer h-8 w-15 text-center pt-1.5"  href="{{route('update-agendamento', $agendamento->id)}}">Agendar </a>
          
              
            </div>
      </div>
    </div>
  </div>
</div>
	        		</div>
                    	@endforeach
                    @endforeach
	        		
        		</div>
        	</div>
    	</div>
	</div>
                   