@extends("layout.layout")

@section('title', 'Listado de Facturas')

@section("contenido")
    @include('facturas.partials.lista_facturas')
@stop