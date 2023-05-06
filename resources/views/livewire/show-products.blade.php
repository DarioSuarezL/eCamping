@if ($products->count() > 0)
<div class="sm:flex sm:flex-col md:grid md:grid-cols-2 md:grid-rows-9 lg:grid-cols-3 lg:grid-rows-6 gap-4 mt-4">
    @foreach ($products as $product)
    <div>
        <a href="{{route('product.show', $product)}}" class="bg-white dark:bg-gray-800 rounded-t-lg p-3 dark:hover:bg-gray-700 hover:cursor-pointer flex justify-around ">
            <img src="{{asset('storage/products/'.$product->imagen)}}" alt="{{$product->nombre}}" class="rounded-lg w-1/3">
            <div class="bg-white dark:bg-gray-900 rounded-lg p-3 text-left w-2/4">
                <p class="text-white font-bold text-xl">{{$product->nombre}}</p>
                <p class="text-white text-sm">Marca: {{$product->brand->nombre}}</p>
                <p class="text-white text-sm">Precio: {{$product->precio}}Bs</p>
                <p class="text-white text-sm">Disponibles: {{$product->stock}}</p>
            </div>
        </a>
        @if (auth()->user()->role == 0)
        <div class="flex w-full">
            <a href="#" class="dark:text-white bg-red-800 rounded-bl-lg p-3 hover:bg-red-600 hover:cursor-pointer flex justify-center w-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                  </svg> Eliminar
            </a>
            <a href="{{route('product.edit', $product)}}" class="dark:text-white bg-green-800 rounded-br-lg p-3 hover:bg-green-600 hover:cursor-pointer flex justify-center w-1/2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                  </svg> Editar
            </a>
        </div>
        @else
        <div class="flex w-full">
            <a href="{{route('product.show', $product)}}" class="dark:text-white bg-green-800 rounded-b-lg p-3 hover:bg-green-600 hover:cursor-pointer flex justify-center w-full">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 010-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                  </svg> Ver
            </a>
        </div>
        @endif
    </div>
    @endforeach
</div>

<div class="m-5">
    {{$products->links()}}
</div>

@else
    <p class="font-semibold text-xl text-gray-800 dark:text-gray-200 w-full leading-10">
        ¡UPS! NO HAY PRODUCTOS, TENEMOS EL STOCK VACÍO
    </p>
@endif

