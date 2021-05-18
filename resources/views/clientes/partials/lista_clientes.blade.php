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
    Clientes
    <div class="w-full py-3">
        <button type="button"
                class="focus:outline-none text-white text-sm py-2.5 px-5 border-b-4 border-blue-600 rounded-md bg-blue-500 hover:bg-blue-400">
            <a href="{{route('clientes.create')}}">Crear Nuevo Cliente</a>
        </button>
    </div>
</h1>
<div>
    <table class="rounded-t-lg m-5 w-5/6 mx-auto bg-gray-800 text-gray-200">
        <tr class="text-left border-b border-gray-300">
            <th class="px-4 py-3">Nombre</th>
            <th class="px-4 py-3">Dirección</th>
            <th class="px-4 py-3">Email</th>
            <th class="px-4 py-3 text-center">Acciones</th>
        </tr>
        @foreach($cli as $cliente)
            <tr class="bg-gray-700 border-b border-gray-600">
                <td class="px-4 py-3">{{$cliente->nombre}}</td>
                <td class="px-4 py-3">{{$cliente->direccion}}</td>
                <td class="px-4 py-3">{{$cliente->email}}</td>
                <td class="px-4 py-3 text-center">
                    <div class="inline-block mr-2 mt-2">
                            <form action="{{ route('clientes.destroy', $cliente->id) }}" method="POST">
                                <a class="focus:outline-none text-white text-sm py-2.5 px-5 border-b-4 border-green-600 rounded-md bg-green-500 hover:bg-green-400"
                                   href="{{ route('clientes.edit',$cliente->id) }}">Modificar</a>
                                @csrf
                                @method('DELETE')
                                <button class="focus:outline-none text-white text-sm py-2.5 px-5 border-b-4 border-red-600 rounded-md bg-red-500 hover:bg-red-400"
                                        type="submit"> Eliminar
                                </button>
                            </form>
                        </div>

                </td>
            </tr>
    @endforeach
</div>

