@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Validación Documentos
@endsection

@push('breadcrumbs')
    <li>Validación documentos</li>
    {{-- <li class="sep">/</li>
    <li>Postulantes</li> --}}
@endpush

@php
    $mensaje_identificacion = "";
    $mensaje_nacionalidad = "";
    $userdata = json_decode($baj->datos_usuario_baj);
    $nombre_completo = strtoupper($userdata->nombre_baj . " " . $userdata->apellido1_baj . ( !empty( $userdata->apellido2_baj) ? " " . $userdata->apellido2_baj : "" ));
    $direccion_usuario = strtoupper($userdata->direccion_baj);
    $nacionalidad = !empty( $userdata->id_nacionalidad ) ? \App\Model\Nacionalidad::where('id_nacionalidad', $userdata->id_nacionalidad)->first()->nacionalidad : "";
    $doc_identificacion = $userdata->es_extranjero_baj ? ( empty($userdata->dni_baj) ? $userdata->pasaporte_baj : $userdata->dni_baj ) : \Freshwork\ChileanBundle\Rut::parse(strtoupper($userdata->rut_baj))->format();

@endphp


@section('contenido')

<div class="post mb-4">
    <div class="post-header">
        <h4>Validación Documentos</h4>
        <h3>Certificado de Privilegio de Pobreza</h3>
    </div>
    <div class="clearfix"></div>

    <div class="texto">
        <div class="contenido">

            @if ( $baj->uuid_validacionbaj !== $uuid )

                <div class="row mt-5">
                    <div class="offset-md-1">&nbsp;</div>
                    <div class="col-md-3 text-center">
                        @include('valida-documentos.layouts.svg-warning')
                    </div>
                    <div class="col-md-7">
                        <p class="text-justify mb-0 mt-3">El token ingresado es inválido.</p>
                        <p class="text-justify mb-0">No es posible validar el documento.</p>
                    </div>
                </div>

            @else
                @include('valida-documentos.baj.info-baj')
            @endif

        </div>
        <div class="clearfix"></div>
    </div>
</div>

@endsection

@push('styles')
    <style>
        table {
            font-size: 1.6rem;
        }
    </style>
@endpush