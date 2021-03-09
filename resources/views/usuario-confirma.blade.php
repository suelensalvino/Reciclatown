 <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
    <div class="p-6 bg-white border-b border-gray-200">
     <div class="grid grid-cols-2">
      @php
      

      $coletores = DB::table('users')->rightJoin('coletors', 'coletors.user_id', '=' ,'users.id')->get()->where('tipo', 'coletor');
      
      @endphp
      @foreach($coletores as $coletor)
      @php
      $produtos = DB::table('produtos')->rightJoin('agendamentos', 'agendamentos.produtos_id', '=' ,'produtos.id')->get()->where('coletors_id', $coletor->user_id );
      
      @endphp

      @foreach($produtos as $produto)
      <div class="p-3 m-1 border rounded-lg hover:bg-gray-200 "  x-data ="{cancelar: false }">
       Um Coleto Solicitou Uma Coleta
       <br>
       Nome do Coletor: {{$coletor->name}}
       <br>
       Descrição do Coletor: {{$coletor->perfil}}
       @php
       $categorias = DB::table('produtos')->rightJoin('categorias', 'categorias.id', '=','produtos.categorias_id')->get()->where('id', $produto->categorias_id);
       @endphp
       <br>
       Contato do coletor: {{$coletor->telefone}}
       <br>
       E-mail do Coletor: {{$coletor->email}}
       <br>
       Responsavel pelo produto: {{Auth::user()->name}}
       <br>
       @foreach($categorias as $categoria)
       Nome do Produto Ha Ser Descartado: {{$categoria->tipo}}

       @endforeach
       <br>
       Descrição do Produto:{{$produto->descricao}}
       <br>
       Quantidade do Produto: {{$produto->quantidade}}
       <br>
       Local do Descarte: {{$produto->local}}
       <br>
       Horario do descarte: {{$produto->horario}}


       <div class="text-sm text-white bg-red-400 rounded-lg cursor-pointer h-8 w-15 text-center pt-1.5" @click="cancelar = true">
         Cancelar Agendamento
       </div>

       <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="cancelar"   >
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
          <!--  sobreposição do pano de fundo de acordo com o modal -->

          <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="cancelar = false">
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
          <h1 class="text-center">Deseja Mesmo Cancelar Esse Agendamento?</h1>
          <div class="flex items-center justify-center mt-4 p-4">
            
            <a class=" text-sm text-black   cursor-pointer mr-4" @click="cancelar = false"   >
              {{ __('Não') }}
            </a>

            @php
            $agendamentos = DB::table('agendamentos')->where('produtos_id', $produto->produtos_id)

            @endphp
            @foreach($agendamentos as $agendamento)
            <a class="  text-sm text-red-800  cursor-pointer  hover:text-red-500 text-center " 
            href="{{}}">Sim </a>
            @endforeach
            
            
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