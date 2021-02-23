<form action="{{ route('update-produto', [$produto]) }}" method="POST">
    @method('PUT')
    @csrf 
        <div class="m-3">
            <x-label for="quantidade" :value="__('Quantidade')" />

            <x-input id="quantidade" class="block mt-1 w-full" type="number" name="quantidade" :value="old('quantidade')" required/>
        </div>
        <div class="m-3">
            <x-label for="descricao" :value="__('Descrição')" />

            <x-input id="descricao" class="block mt-1 w-full" type="Text" name="descricao" :value="old('descricao')" required/>
        </div>

        <div class="flex items-center justify-end mt-4">
                    
            <div class="flex items-center justify-center mt-4">

            <a href="http://localhost:8000/dashboard" class="no-underline">
                {{ __('Cancelar?') }}
            </a>
                    
            <x-button class="ml-4">
                {{ __('Confirmar') }}
            </x-button>
        </div>
</form>
