<div>
    <form wire:submit.prevent="buy" class="">
        <div class="p-5 bg-gray-800 rounded-lg mt-8 w-1/3">
            <x-input-label for="method" :value="__('Método de pago')" />
            <select wire:model='payment_method_id'>
                <option value="" hidden> --Seleccione metodo-- </option>
                @foreach ($methods as $method)
                    <option value="{{ $method->id }}">{{ $method->nombre }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="text-white bg-red-800 hover:bg-red-700 p-2 rounded-lg mt-8 h-1/2">
            {{ __('Seleccionar') }}
        </button>
    </form>
</div>
