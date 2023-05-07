<div>
    <div class="flex justify-between">
        <img src="{{asset('storage/products/'.$product->imagen)}}" alt="{{$product->nombre}}" class="rounded-lg w-1/3">
        <div class="flex flex-col justify-center w-1/2 bg-white dark:bg-gray-900 rounded-lg h-2/3">
            <p class="px-5"> 
                <span class="font-bold">
                    Marca: 
                </span>
                {{$product->brand->nombre}}
            </p>

            <p class="px-5"> 
                <span class="font-bold">
                    Categoría: 
                </span>
                {{$product->category->nombre}}
            </p>

            <p class="px-5"> 
                <span class="font-bold">
                    Precio: 
                </span>
                {{$product->precio}} Bs.
            </p>

            <p class="px-5"> 
                <span class="font-bold">
                    Stock: 
                </span>
                {{$product->precio}} Unidades.
            </p>

            <p class="px-5"> 
                <span class="font-bold truncate">
                    Descripción: 
                </span>
                {{$product->descripcion}}
            </p>
        </div>
    </div>
</div>
