<div  x-data= "{ add_modal: false}">
  <div class="max-w-7xl mt-5 mx-auto sm:px-6 lg:px-8">
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
      <div class="p-6 bg-white border-b border-gray-200">
        <!---listanto os produtos de descarte do usuário--->
        <div class="grid grid-cols-4"> 
          <div class=" border rounded-lg p-2 m-2 bg-blue-900 hover:bg-blue-800 text-center text-white " @click="add_modal = true">
            @if(Auth::user()->tipo != "coletor")
            Torne-se um coletor
            @else
            Torna-se Usuário comum
            @endif
          </div>
        

        <!--Botão de editar -->
    <div x-data="{editPerfil: false}">
      <div class="border rounded-lg p-2 m-2 bg-blue-900 hover:bg-blue-800 text-center text-white" @click="editPerfil = true">Editar perfil</div>
      
      <!-- MODAL de editar -->
      <div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="editPerfil">
        <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0 ">
          <div class="fixed inset-0 transition-opacity" aria-hidden="true" @click="editPerfil = false">
            <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
          </div>
          <span class="hidden sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">&#8203;</span>
          <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full p-3" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
            <div>
              <form action="{{ route('update-coletor', Auth::user()) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="m-3">
                  <x-label for="name" :value="__('Nome')" />
                  <x-input id="name" class="block mt-1 w-full" type="Text" name="name" value="{{Auth::user()->name}}" required/>

                </div>
                <div class="m-3">
                  <x-label for="email" :value="__('E-mail')" />
                  <x-input id="email" class="block mt-1 w-full" type="Text" name="email" value="{{Auth::user()->email}}" required/>
                </div>
                <div class="m-3">
                  <x-label for="nascimento" :value="__('Nascimento')" />
                  <x-input id="nascimento" class="block mt-1 w-full" type="date" name="nascimento" value="{{Auth::user()->nascimento}}" required/>
                </div>
                <div class="m-3">
                  <x-label for="uf" :value="__('UF')" />
                  <x-input id="uf" class="block mt-1 w-full" type="Text" name="uf" value="{{Auth::user()->uf}}" required/>
                </div>
                <div class="m-3">
                  <x-label for="cidade" :value="__('Cidade')" />
                  <x-input id="cidade" class="block mt-1 w-full" type="Text" name="cidade" value="{{Auth::user()->cidade}}" required/>
                </div>
                <div class="m-3">
                  <x-label for="bairro" :value="__('Bairro')" />
                  <x-input id="bairro" class="block mt-1 w-full" type="Text" name="bairro" value="{{Auth::user()->bairro}}" required/>
                </div>
                <div class="m-3">
                  <x-label for="cep" :value="__('CEP')" />
                  <x-input id="cep" class="block mt-1 w-full" type="Text" name="cep" value="{{Auth::user()->cep}}" required/>
                </div>
                <div class="m-3">
                  <x-label for="logradouro" :value="__('Logradouro')" />
                  <x-input id="logradouro" class="block mt-1 w-full" type="Text" name="logradouro" value="{{Auth::user()->logradouro}}" required/>
                </div>
                <div class="m-3">
                  <x-label for="complemento" :value="__('Complemento')" />
                  <x-input id="complemento" class="block mt-1 w-full" type="Text" name="complemento" value="{{Auth::user()->complemento}}" required/>
                </div>
                @if(Auth::user()->tipo == "coletor")
                <div class="m-3">
                  <x-label for="perfil" :value="__('Perfil')" />
                  <x-input id="perfil" class="block mt-1 w-full" type="Text" name="perfil" value="{{Auth::user()->coletors->perfil}}" required/>
                </div>
                <div class="m-3">
                  <x-label for="telefone" :value="__('Telefone')" />
                  <x-input id="telefone" class="block mt-1 w-full" type="Text" name="telefone" value="{{Auth::user()->coletors->telefone}}" required/>
                </div> 
                @endif
                <div class="flex items-center justify-end mt-4">
                  <div class="flex items-center justify-center mt-4">
                    <a class="underline text-sm hover:text-red-500 cursor-pointer" @click="editPerfil = false">
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
      <form action="{{route('update-coletor', $user )}}" method="POST">
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
              <option class="block mt-1 w-full"  value="usuario" >Usuário</option>
            @endif
          </x-select>
              <template x-if="tipo_user == 'coletor'">
                    <div>
                        <div class="mt-4">
                        <x-label for="perfil" :value="__('Faça uma uma breve descrição')" />

                        <x-textarea id="perfil" class="block mt-1 w-full" type="text" name="perfil" :value="old('perfil')" required />
                        </div>
                           <div class="mt-4">
                            <x-label for="telefone" :value="__('Telefone')" />

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