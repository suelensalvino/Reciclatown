	<div class=" py-2 px-4 grid grid-cols-5  rounded  p-3 m-0.5  cursor-pointe" >

		<div class=" m-3   text-left">
			<h6>Nome</h6>
			<div class="text-black text-opacity-100 ">
				<strong><p> {{ Auth::user()->name}} </p></strong>
			</div>
		</div>
		<div class=" m-3   text-left ">
			<h6>E-mail</h6>
			<div class="text-black text-opacity-100 ">
				<strong><p> {{ Auth::user()->email}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Nascimento</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->nascimento}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Tipo</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->tipo}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>UF</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->uf}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Cidade</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->cidade}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Bairro</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->bairro}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>CEP</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->cep}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Logradouro</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->logradouro}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Complemento</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->complemento}} </p></strong>
			</div>
		</div>
		@if(Auth::user()->tipo == "coletor")

		<div class=" m-3   text-left ">
			<h6>Perfil</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->coletors->perfil}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Telefone</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->coletors->telefone}} </p></strong>
			</div>
		</div>
		@endif

		<!--Botão de editar -->
		<div x-data="{editPerfil: false}">
			<x-button class="p-2 m-2 bg-blue-900 hover:bg-blue-800 text-center text-white" @click="editPerfil = true">Editar perfil</x-button>
			
			<!-- MODAL de editar -->
			<div class="fixed z-10 inset-0 overflow-y-auto" style="display: none;" x-show="editPerfil">
				<div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
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
									<x-input id="name" class="block mt-1 w-full" type="Text" name="name" :value="old('name')" required/>
								</div>
								<div class="m-3">
									<x-label for="email" :value="__('E-mail')" />
									<x-input id="email" class="block mt-1 w-full" type="Text" name="email" :value="old('email')" required/>
								</div>
								<div class="m-3">
									<x-label for="nascimento" :value="__('Nascimento')" />
									<x-input id="nascimento" class="block mt-1 w-full" type="date" name="nascimento" :value="old('nascimento')" required/>
								</div>
								<div class="m-3">
									<x-label for="tipo" :value="__('Tipo')" />
									<x-input id="tipo" class="block mt-1 w-full" type="Text" name="tipo" :value="old('tipo')" required/>
								</div>
								<div class="m-3">
									<x-label for="uf" :value="__('UF')" />
									<x-input id="uf" class="block mt-1 w-full" type="Text" name="uf" :value="old('uf')" required/>
								</div>
								<div class="m-3">
									<x-label for="cidade" :value="__('Cidade')" />
									<x-input id="cidade" class="block mt-1 w-full" type="Text" name="cidade" :value="old('cidade')" required/>
								</div>
								<div class="m-3">
									<x-label for="bairro" :value="__('Bairro')" />
									<x-input id="bairro" class="block mt-1 w-full" type="Text" name="bairro" :value="old('bairro')" required/>
								</div>
								<div class="m-3">
									<x-label for="cep" :value="__('CEP')" />
									<x-input id="cep" class="block mt-1 w-full" type="Text" name="cep" :value="old('cep')" required/>
								</div>
								<div class="m-3">
									<x-label for="logradouro" :value="__('Logradouro')" />
									<x-input id="logradouro" class="block mt-1 w-full" type="Text" name="logradouro" :value="old('logradouro')" required/>
								</div>
								<div class="m-3">
									<x-label for="complemento" :value="__('Complemento')" />
									<x-input id="complemento" class="block mt-1 w-full" type="Text" name="complemento" :value="old('complemento')" required/>
								</div>
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