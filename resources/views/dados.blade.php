	<div class=" py-2 px-4 grid grid-cols-5  rounded  p-3 m-0.5  cursor-pointe" >

		<div class=" m-3   text-left">
			<h6>Nome: de usuário:</h6>
			<div class="text-black text-opacity-100 ">
				<strong><p> {{ Auth::user()->name}} </p></strong>
			</div>
		</div>
		<div class=" m-3   text-left ">
			<h6>E-mail:</h6>
			<div class="text-black text-opacity-100 ">
				<strong><p> {{ Auth::user()->email}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Nascimento:</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->nascimento}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Tipo:</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->tipo}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>UF:</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->uf}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Cidade:</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->cidade}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Bairro:</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->bairro}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Cep:</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->cep}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Logradouro:</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->logradouro}} </p></strong>
			</div>
		</div>

		<div class=" m-3   text-left ">
			<h6>Complemento:</h6>
			<div class="text-black text-opacity-100 ">
				<strong> <p> {{ Auth::user()->complemento}} </p></strong>
			</div>
		</div>
		@if(Auth::user()->tipo == "coletor")

			<div class=" m-3   text-left ">
			<h6>Perfil:</h6>
				<div class="text-black text-opacity-100 ">
					<strong> <p> {{ Auth::user()->coletors->perfil}} </p></strong>
				</div>
			</div>

			<div class=" m-3   text-left ">
				<h6>Telefone:</h6>
				<div class="text-black text-opacity-100 ">
					<strong> <p> {{ Auth::user()->coletors->telefone}} </p></strong>
				</div>
			</div>
		@endif
	</div>
