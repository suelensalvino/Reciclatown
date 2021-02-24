<x-app-layout>
  <x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
      {{ __('Meu perfil') }}
    </h2>
    <h3>Editar perfil</h3>
  </x-slot>

  <div class="py-12 grid grid-cols-4 m-3 " >

     <div class="border m-3 bg-blue-100 text-center">
     	<h6>Nome: de usuário:</h6>
		<div class=" ">
			<p> {{ Auth::user()->name}} </p>
		</div>
	</div>
		<div class="border m-3 bg-blue-100 text-center">
			<h6>E-mail:</h6>
			<div class=" ">
				<p> {{ Auth::user()->email}} </p>
			</div>
		</div>
	
		<div class="border m-3 bg-blue-100 text-center">
			<h6>Nascimento:</h6>
			<div class=" ">
				<p> {{ Auth::user()->nascimento}} </p>
			</div>
		</div>
	
		<div class="border m-3 bg-blue-100 text-center">
			<h6>Tipo:</h6>
			<div class=" ">
				<p> {{ Auth::user()->tipo}} </p>
			</div>
		</div>
	
		<div class="border m-3 bg-blue-100 text-center">
			<h6>UF:</h6>
			<div class=" ">
				<p> {{ Auth::user()->uf}} </p>
			</div>
		</div>

	<div class="border m-3 bg-blue-100 text-center">
			<h6>Cidade:</h6>
			<div class=" ">
				<p> {{ Auth::user()->cidade}} </p>
			</div>
		</div>

		<div class="border m-3 bg-blue-100 text-center">
			<h6>Bairro:</h6>
			<div class=" ">
				<p> {{ Auth::user()->bairro}} </p>
			</div>
		</div>
	
		<div class="border m-3 bg-blue-100 text-center">
			<h6>Cep:</h6>
			<div class=" ">
				<p> {{ Auth::user()->cep}} </p>
			</div>
		</div>
	
		<div class="border m-3 bg-blue-100 text-center">
			<h6>Logradouro:</h6>
			<div class=" ">
				<p> {{ Auth::user()->logradouro}} </p>
			</div>
		</div>
	
		<div class="border m-3 bg-blue-100 text-center">
			<h6>Complemento:</h6>
			<div class=" ">
				<p> {{ Auth::user()->complemento}} </p>
			</div>
		</div>
	

</div>
</x-app-layout>

