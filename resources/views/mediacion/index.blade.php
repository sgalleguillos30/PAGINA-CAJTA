@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Centro de Mediación
@endsection

@push('breadcrumbs')
    <li>Centro de Mediación</li>
@endpush


@section('contenido')

    <div class="post">
        <div class="post-header">
            <h4>Nuestras oficinas</h4>
            <h3>Centro de Mediación</h3>
        </div>

        <div class="clearfix"></div>

        <div class="texto">
            <h3 class="title">¿Qué es el Centro de Mediación?</h3>
            <div class="contenido link-texto">
                <p>Es un Centro Especializado que atiende a todas las personas que voluntariamente, desean solucionar sus conflictos de una manera pacífica, a través de la línea de Solución Colaborativa de Conflictos y/o Mediación, sin necesidad de recurrir a los Tribunales de Justicia, potenciando el diálogo en la comunidad.</p>
                <p>En atención a las medidas de prevención por COVID-19, se encuentra suspendida la atención presencial en nuestras unidades, sin embargo, seguimos atendiendo de manera remota.</p>
            </div>
        </div>
    </div>


@endsection



@push('adicional')
    <div class="clearfix"></div>

    <div class="stream">
        <div class="post">
            <div class="texto">
                <h3 class="title">Solicita un Proceso de Mediación / Proceso de Solución Colaborativa de Conflictos vía web</h3>
                <div class="contenido link-texto">

                    <h3 class="text-center">
                        <img src="{{ asset('assets/media/mediacion/CMED-IQQ.png') }}" alt="Centro de Mediación CAJTA" class="img-fluid" style="border: 1px solid #EBEBEB;">
                    </h3>

                    <p>Completa el siguiente formulario para hacer tu solicitud, y nuestros profesionales te contactarán:</p>

                    <div class="row col-md-12 justify-content-center">
                        <a href="{{ route('mediacion.solicitud') }}" class="btn btn-danger p-5 bold" style="font-size: 18px !important;">
                            <i class="far fa-calendar-alt"></i> &nbsp; <span class="text-lg">Haz tu solicitud aquí!</span>
                        </a>
                    </div>

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>


    <div class="clearfix"></div>
@endpush

