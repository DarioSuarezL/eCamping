<form action="" class="md:w-1/2">

    <!-- Nombre producto -->
    <div>
        <x-input-label for="nombre" :value="__('Nombre')" />
        <x-text-input
            id="nombre" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="nombre" 
            :value="old('nombre')" 
            required 
            autofocus
        />
        <x-input-error :messages="$errors->get('nombre')" class="mt-2" />
    </div>

    <!-- Descripción producto -->
    <div class="mt-4">
        <x-input-label for="descripcion" :value="__('Descripción')" />
        <x-text-input 
            id="descripcion" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="descripcion" 
            :value="old('descripcion')" 
            required
        />
        <x-input-error :messages="$errors->get('descripcion')" class="mt-2" />
    </div>
    
    <!-- Categoria producto -->
    <div class="mt-4">
        <x-input-label for="categoria_id" :value="__('Categoría')" />
        <select 
            wire:model="categoria_id" 
            id="categoria_id" 
            class="block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm"
        >

            <option selected hidden>Seleccione la categoria</option>

            @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nombre }}</option>
            @endforeach

        </select>
        <x-input-error :messages="$errors->get('categoria')" class="mt-2" />
    </div>

    <!-- Precio producto -->
    <div class="mt-4">
        <x-input-label for="precio" :value="__('Precio')" />
        <x-text-input 
            id="precio" 
            class="block mt-1 w-full" 
            type="text" 
            wire:model="precio" 
            :value="old('precio')" 
            required
        />
        <x-input-error :messages="$errors->get('precio')" class="mt-2" />
    </div>

    <!-- Stock producto -->
    <div class="mt-4">
        <x-input-label for="stock" :value="__('Stock')" />
        <x-text-input 
            id="stock" 
            class="block mt-1 w-full" 
            type="number" 
            wire:model="stock" 
            :value="old('stock')" 
            required
        />
        <x-input-error :messages="$errors->get('stock')" class="mt-2" />
    </div>

    <!-- Imagen producto -->
    <div class="mt-4">
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input 
            id="imagen"
            class="block mt-1 w-full dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-indigo-500 dark:focus:border-indigo-600 focus:ring-indigo-500 dark:focus:ring-indigo-600 rounded-md shadow-sm" 
            type="file"
            wire:model="imagen" 
            required
        />
        <x-input-error :messages="$errors->get('imagen')" class="mt-2" />
    </div>


    <div class="flex items-center justify-end mt-10">
        <x-primary-button class="ml-4">
            {{ __('Añadir producto') }}
        </x-primary-button>
    </div>


</form>