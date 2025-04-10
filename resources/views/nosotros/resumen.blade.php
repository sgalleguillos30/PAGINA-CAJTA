@extends('layouts.estructura-inicial')

@section('title', 'CAJTA | Quienes Somos')

@push('breadcrumbs')
    <li>Quiénes somos</li>
    <li class="sep">/</li>
    <li>Resumen</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Quiénes Somos</h4>
            <h3>Resumen</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title text-center">Región de Arica y Parinacota</h3>

                <embed
                    src="{{ asset('assets/docs/nosotros/resumen/ResumenARICA.pdf') }}"
                    navpanes="0"
                    type="application/pdf"
                    width="100%"
                    height="400px"
                />

                <div class="texto-separacion"></div>
                <div class="texto-separacion"></div>

                <h3 class="title text-center">Región de Tarapacá</h3>

                <embed
                    src="{{ asset('assets/docs/nosotros/resumen/ResumenTARAPACA.pdf') }}"
                    navpanes="0"
                    type="application/pdf"
                    width="100%"
                    height="400px"
                />

                <div class="texto-separacion"></div>
                <div class="texto-separacion"></div>

                <h3 class="title text-center">Región de Antofagasta</h3>

                <embed
                    src="{{ asset('assets/docs/nosotros/resumen/ResumenANTOFAGASTA.pdf') }}"
                    navpanes="0"
                    type="application/pdf"
                    width="100%"
                    height="400px"
                />




            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
