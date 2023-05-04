<div class="md:grid md:grid-cols-3 md:grid-rows-6 gap-4 mt-4">
    @foreach ($products as $product)

        <div class="bg-white dark:bg-gray-800 rounded-lg p-3 dark:hover:bg-gray-700 hover:cursor-pointer flex justify-around ">
            <img src="{{asset('storage/products/'.$product->imagen)}}" alt="{{$product->nombre}}" class="rounded-lg w-1/3">
            <div class="bg-white dark:bg-gray-900 rounded-lg p-3 text-left w-2/4">
                <p class="text-white font-bold text-xl">{{$product->nombre}}</p>
                <p class="text-white text-sm">Marca: {{$product->brand->nombre}}</p>
                <p class="text-white text-sm">Precio: {{$product->precio}}Bs</p>
                <p class="text-white text-sm">Disponibles: {{$product->stock}}</p>
            </div>
        </div>

    @endforeach
</div>
