@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Contacto
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('contacto.index') }}">Contacto</a></li>
    <li class="sep">/</li>
    <li>Ficha Contacto</li>
@endpush

@section('contenido')

    <div class="post">
        <div class="post-header">
            <h4>Resumen</h4>
            <h3>Ficha Contacto</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                @include('layouts.fijos.messages-flash-box')

                <div class="texto-separacion"></div>

                <h3 class="blue center"><span class="bold">Nº Mensaje:</span> #{{ str_pad($cajoirs->id_cajoirs , 6, '0', STR_PAD_LEFT) }}</h3>

                <dl class="dl-horizontal opensans">
                    <dt class="text-bold">RUT</dt>
                    <dd>{{ $cajoirs->rut_cajoirs == '0000000-0' ? "Persona sin documento de identificación" : $cajoirs->rut_cajoirs  }}</dd>

                    <dt class="text-bold">Nombre</dt>
                    <dd>{{ $cajoirs->getNombre() }}</dd>

                    <dt class="text-bold">Dirección</dt>
                    <dd>{{ $cajoirs->direccion_cajoirs }}</dd>

                    <dt class="text-bold">Correo electrónico</dt>
                    <dd>{{ $cajoirs->mail_cajoirs }}</dd>

                    @if ( !empty( $cajoirs->fono_cajoirs ) )
                        <dt class="text-bold">Teléfono</dt>
                        <dd>{{ $cajoirs->fono_cajoirs }}</dd>
                    @endif

                    <dt class="text-bold">Sexo</dt>
                    <dd>{{ $cajoirs->sexo->sexo }}</dd>

                    <dt class="text-bold">Ciudad</dt>
                    <dd>{{ $cajoirs->ciudad->ciudad }}</dd>

                    @if ( !empty( $cajoirs->id_unidad ) )
                        <dt class="text-bold">Centro de Atención</dt>
                        <dd>{{ $cajoirs->unidad->nombre_unidad }}</dd>
                    @endif

                    <dt class="text-bold">Forma de Respuesta</dt>
                    <dd>{{ $cajoirs->tiporespuesta->tipo_respuesta }}</dd>

                    <dt class="text-bold">Tipo de Mensaje</dt>
                    <dd>{{ $cajoirs->tipomensaje->tipo_mensaje }}</dd>

                    <dt class="text-bold">Envío del mensaje</dt>
                    <dd>{{ Carbon\Carbon::parse($cajoirs->creado_cajoirs)->translatedFormat('d \d\e F \d\e Y H:i:s') }}</dd>

                    <dt class="text-bold">Mensaje</dt>
                    <dd>{!! $cajoirs->consulta_cajoirs !!}</dd>
                </dl>

                <dl class="dl-horizontal opensans">
                    <dt>Mensaje Asignado a :</dt>
                    <dd>{{ $cajoirs->asigcajoirs->usuario->getUsername() }}<br />( {{ $cajoirs->asigcajoirs->usuario->cargo_us }} )</dd>
                </dl><hr />

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
