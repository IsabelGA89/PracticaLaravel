@extends("layout.layout")
@section('title', 'Editar factura')

@section("contenido")

    <div class="md:container md:mx-auto"><h1 class="text-4xl">Editar Factura {{$factura->id}}</h1></div>
    <div class="md:container md:mx-auto">
        <form action="{{route('facturas.update',$factura->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                               for="grid-first-name">
                            Empresa
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                               name="empresa" type="text" value="{{$factura->empresa}}">
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                               for="grid-last-name">
                            Producto
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                               name="producto" value="{{$factura->producto}}" type="text">
                    </div>
                </div>
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                               for="grid-password" >
                            Unidades
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                               name="unidades" type="number" value="{{$factura->unidades}}">
                    </div>
                    <div class="md:w-1/3 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                               for="grid-city">
                            Total
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                               name="total" type="text" value="{{$factura->total}}">
                    </div>

                    <div class="md:w-1/3 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="grid-zip">
                            Impuesto
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                               name="impuesto" type="text" value="{{$factura->impuesto}}">
                    </div>
                </div>
                <div class="flex inline-flex mr-2" role="group">
                    <input type="submit" name="Guardar" value="Guardar"
                           class="focus:outline-none text-white text-sm py-2.5 px-5 bg-green-500 rounded-l-md hover:bg-green-600 hover:shadow-lg" />

                    <a  href="{{ route('facturas.index')}}"
                        class="focus:outline-none text-white text-sm py-2.5 px-5 bg-red-500 rounded-r-md hover:bg-red-600 hover:shadow-lg">
                        Cancelar
                    </a>

                </div>
            </div>

        </form>
    </div>
@endsection