@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Participación Ciudadana
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('pciudadana.index') }}">Participación Ciudadana</a></li>
    <li class="sep">/</li>
    <li>Consultorios Jurídicos Móviles</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Participación Ciudadana</h4>
            <h3>Consultorios Jurídicos Móviles</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title">Consultorios Jurídicos Móviles</h3>

                <p>Son unidades de la Corporación de Asistencia Judicial de las Regiones de Tarapacá y Antofagasta, que tiene por objeto acercar el acceso a la justicia a las comunidades rurales apartadas de los centros urbanos, entregando en terreno, orientación e información, resolución alternativa de conflictos, patrocinio judicial, además de acciones de difusión y promoción de derechos.</p>
                <p>
                    Documentos:
                    <ul class="opensans">
                        <li><a href="{{ asset('assets/docs/partciudadana/moviles/CONS-MOVILES-2017.pdf') }}" class="blue opensans" target="_blank">Actividades Consultorios Jurídicos Móviles - Año 2017</a></li>
                    </ul>
                </p>



                @include('pciudadana.layouts.otros-links')

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
