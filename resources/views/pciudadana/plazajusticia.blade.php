@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Participación Ciudadana
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('pciudadana.index') }}">Participación Ciudadana</a></li>
    <li class="sep">/</li>
    <li>Plazas de Justicia</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Participación Ciudadana</h4>
            <h3>Plazas de Justicia</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title">Plazas de Justicia</h3>

                <p>Las Plazas de Justicia son un espacio desconcertado de difusión y promoción en lugares públicos de las políticas, planes, programas y acciones de la Corporación de Asistencia Judicial de las Regiones de Tarapacá y Antofagasta, conforme los lineamientos del Ministerio de Justicia,</p>
                <p>
                    Documentos:
                    <ul>
                        <li><a href="{{ asset('assets/docs/partciudadana/plazas/PLAZAS-JUSTICIA-2017.pdf') }}" class="blue opensans" target="_blank">Plazas de Justicia - Año 2017</a></li>
                    </ul>
                </p>



                @include('pciudadana.layouts.otros-links')

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
