@if ($message = Session::get('success'))
    <div class="py-3 px-5 mb-4 bg-green-100 text-green-900 text-sm rounded-md border border-green-200" role="alert">
        <p>{{ $message }}</p>
    </div>
@endif
@if ($message = Session::get('error'))
    <div class="py-3 px-5 mb-4 bg-red-100 text-red-900 text-sm rounded-md border border-red-200" role="alert">
        <p>{{ $message }}</p>
    </div>
@endif
<h1 class="text-4xl text-center font-bold m-5">
    Facturas
    <div class="w-full py-3">
        <button type="button"
                class="focus:outline-none text-white text-sm py-2.5 px-5 border-b-4 border-blue-600 rounded-md bg-blue-500 hover:bg-blue-400">
            <a href="{{route('facturas.create')}}">Crear Nuevo cliente</a>
        </button>
    </div>
</h1>
<div>
    <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200">
        <tr class="text-left border-b border-gray-300">
            <th class="px-4 py-3">Empresa</th>
            <th class="px-4 py-3">Producto</th>
            <th class="px-4 py-3">Unidades</th>
            <th class="px-4 py-3">Total</th>
            <th class="px-4 py-3">Impuesto</th>
            <th class="px-4 py-3 text-center">Acciones</th>
        </tr>
        @foreach($fras as $fra)
            <tr class="bg-gray-700 border-b border-gray-600">
                <td class="px-4 py-3">{{$fra->empresa}}</td>
                <td class="px-4 py-3">{{$fra->producto}}</td>
                <td class="px-4 py-3">{{$fra->unidades}}</td>
                <td class="px-4 py-3">{{$fra->total}}</td>
                <td class="px-4 py-3">{{$fra->impuesto}}</td>
                <td class="px-4 py-3 text-center">
                    <div class="inline-block mr-2 mt-2">
                        <button type="button"
                                class="focus:outline-none text-white text-sm py-2.5 px-5 border-b-4 border-green-600 rounded-md bg-green-500 hover:bg-green-400">
                            <a href="{{route('facturas.update',$fra->id)}}"> Modificar</a>
                        </button>
                    </div>

                    <div class="inline-block mr-2 mt-2">

                        <button type="button"
                                class="focus:outline-none text-white text-sm py-2.5 px-5 border-b-4 border-red-600 rounded-md bg-red-500 hover:bg-red-400">
                            <a href="{{route('facturas.destroy',$fra->id)}}"> Eliminar </a>
                        </button>
                    </div>

                </td>
            </tr>
    @endforeach
</div>

