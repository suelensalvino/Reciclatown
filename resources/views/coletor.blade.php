<div  x-data= "{ add_modal: false}">
  <div class="max-w-7xl mt-5 mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200">
        <!---listanto os produtos de descarte do usuário--->

        <div class="grid grid-cols-4"> 
          <div class="p-3 m-0.5  border rounded-lg bg-blue-100 hover:bg-blue-200 cursor-pointer" @click="add_modal = true">
            @if(Auth::user()->tipo != "coletor")
            Torne-se um coletor
            @else
            Torna-se usuáriorio comum
            @endif
          </div>


        </div>
      </div>
    </div>
  </div>

  <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="add_modal">
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
  <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-3" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
    <div>
      @php
      $user = Auth::user()->id;
      @endphp
      <form action="{{route('update-coletor',$user )}}" method="POST">
        @method('PUT')
        @csrf
        <!-- tipo_produto -->

        <div class="" x-data ="{tipo_user : ''}">
          <x-label for="tipo" :value="__('Tipo')" />
          <x-select id="tipo" class="block mt-1 w-full" type="text" name="tipo"   required x-model="tipo_user" >
            <option class="block mt-1 w-full"  value="" >---------</option>
            @if(Auth::user()->tipo != "coletor")
              <option class="block mt-1 w-full"  value="coletor" >Coletor(a)</option>
            @else
              <option class="block mt-1 w-full"  value="usuario" >Usuario</option>
            @endif
          </x-select>
          <template x-if="tipo_user == 'coletor'">
                <div>
                    <div class="mt-4">
                    <x-label for="perfil" :value="__('perfil')" />

                    <x-textarea id="perfil" class="block mt-1 w-full" type="text" name="perfil" :value="old('perfil')" required />
                    </div>
                       <div class="mt-4">
                        <x-label for="telefone" :value="__('telefone')" />

                        <x-input id="telefone" class="block mt-1 w-full" type="text" name="telefone" :value="old('telefone')" required />
                    </div>
                </div>
            </template>

        </div>
        <div class="flex items-center justify-end mt-4">
          <a class="underline text-sm text-red-500 hover:text-red-500 cursor-pointer" @click="add_modal = false">
            {{ __('Cancelar') }}
          </a>
          <x-button class="ml-4">
            {{ __('Confirmar') }}
          </x-button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>