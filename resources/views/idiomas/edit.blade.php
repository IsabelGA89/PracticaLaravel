@extends("layout.layout")
@section('title', 'Editar Idioma')

@section("contenido")
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
    <div class="md:container md:mx-auto"><h1 class="text-4xl">Editar Idioma {{$idioma->id}}</h1></div>
    <div class="md:container md:mx-auto">
        <form action="{{route('idiomas.update',$idioma->id)}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col my-2">
                <div class="-mx-3 md:flex mb-6">
                    <div class="md:w-1/2 px-3 mb-6 md:mb-0">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                               >
                            Idioma
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                               name="idioma" type="text" value="{{$idioma->idioma}}">
                    </div>
                    <div class="md:w-1/2 px-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                               >
                            Código
                        </label>
                        <input class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4"
                               name="codigo" value="{{$idioma->codigo}}" type="text">
                    </div>
                </div>
                <div class="flex inline-flex mr-2" role="group">
                    <input type="submit" value="Guardar"
                       class="focus:outline-none text-white text-sm py-2.5 px-5 bg-green-500 rounded-l-md hover:bg-green-600 hover:shadow-lg">
                    </input>

                    <a href="{{ route('idiomas.index')}}"
                       class="focus:outline-none text-white text-sm py-2.5 px-5 bg-red-500 rounded-r-md hover:bg-red-600 hover:shadow-lg">
                        Cancelar
                    </a>

                </div>
            </div>

        </form>
    </div>
@endsection