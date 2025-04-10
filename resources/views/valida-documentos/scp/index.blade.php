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
    $solicitante = json_decode($solicitud->datos_solicitante);
    $nombre_solicitante = $solicitante->nombre_solicitante . " " . $solicitante->apellido1_solicitante . " " . $solicitante->apellido2_solicitante;

    $estados_termino = [
        \App\Model\FPostulantesCertEstado::TERMINO_AUTOMATIZADO,
        \App\Model\FPostulantesCertEstado::TERMINADO_ENTREGADO,
        \App\Model\FPostulantesCertEstado::CIERRE_DUPLICADO,
        ];
@endphp


@section('contenido')

<div class="post mb-4">
    <div class="post-header">
        <h4>Validación Documentos</h4>
        <h3>Certificado de Práctica Profesional</h3>
    </div>
    <div class="clearfix"></div>

    <div class="texto">
        <div class="contenido">

            @if ( $solicitud->uuid_validacion_emision !== $uuid )

                <div class="row mt-5">
                    <div class="col-md-3 text-center">
                        @include('valida-documentos.layouts.svg-warning')
                    </div>
                    <div class="col-md-9 d-flex align-items-center">
                        <p class="text-justify mb-0">El token ingresado es inválido.<br />No es posible validar el documento.</p>
                    </div>
                </div>

            @elseif ( $solicitud->fpostulantes_cert_estado_id !== (int) App\Model\FpostulantesCertEstado::SOLICITUD_TERMINADA )
                <div class="row mt-5">
                <div class="col-md-3 text-center">
                    @include('valida-documentos.layouts.svg-warning')
                </div>
                <div class="col-md-9 d-flex align-items-center">
                    @if ( in_array($solicitud->fpostulantes_cert_estado_id, $estados_termino) )
                        <p class="text-justify mb-0">El documento fue cerrado antes de emitirse el documento.</p>
                    @else
                        <p class="text-justify mb-0">Es posible que el documento se encuentre en proceso de emisión o no ha sido entregado a quien lo solicitó.</p>
                    @endif
                </div>
            </div>
            @else
                @include('valida-documentos.scp.info-practica')
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