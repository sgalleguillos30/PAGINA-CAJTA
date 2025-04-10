<?php
/**
 *      Variables para ser utilizadas globalmente
 */
$redsocial = \App\Model\RedSocial::all();
$listaregion = \App\Model\Region::orderBy('numero_reg')->get();
$unidadConvenio = \App\Model\Unidad::getUnidadConvenio();
$directores = \App\Model\Usuario::getDirGenDirReg();
?>
<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @include('layouts.fijos.head')

    <title>@yield('title')</title>
    @stack('styles')
</head>
<body>
    @include('layouts.fijos.facebook')
    {{--@include('layouts.contenedores.header_coronavirus')--}}
    @include('layouts.contenedores.header')

    <div class="wrap">
        {{--Banner's Top--}}
        @include('layouts.contenedores.banners-top')

        {{--Breadcrumbs--}}
        @if ( !Request::is('/') )
            @include('layouts.contenedores.breadcrumbs')
        @endif


        {{--Contenedor Principal--}}
        @include('layouts.contenedores.contenedor-principal')

        {{--Sidebar--}}
        @include('layouts.contenedores.sidebar')

        <div class="clearfix"></div>

        {{--Cuadro sobre nosotros--}}
        @if ( Request::is('/'))
            @include('layouts.fijos.sobre-nosotros')
        @endif

        {{--Prefooter--}}
        @include('layouts.banners.cuenta-publica')
        @include('layouts.contenedores.sidebar.transparencia', ['mosaico' => true])
        @include('layouts.banners.internos')

        {{--Mosaico de RSS--}}
        @include('layouts.fijos.redes-mosaico')

        {{--Footer--}}
        @include('layouts.contenedores.footer')
    </div>
    @include('layouts.fijos.scripts')
    @stack('scripts')
</body>
</html>
