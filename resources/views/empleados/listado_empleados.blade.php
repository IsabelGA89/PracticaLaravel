@extends("layout.layout")

@section('title', 'Listado de Empleados')

@section("contenido")
    @include('empleados.partials.lista_empleados')
@endsection