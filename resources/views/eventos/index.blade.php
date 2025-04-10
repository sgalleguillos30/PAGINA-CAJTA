@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Inscripción a Evento
@endsection

@push('breadcrumbs')
    <li>Inscripción a Evento</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Eventos</h4>
            <h3>Proceso de Inscripción</h3>
        </div>

        <div class="clearfix"></div>

        <div class="texto">
            <h3 class="title">Próximos eventos</h3>
            <div class="contenido">

                <!--<p class="text-center">
                    <a href="{{ route('eventos.show') }}" class="btn btn-danger text-center">Quiero participar</a>
                </p>-->

                <p style="text-align: center !important">
                    <!--<a href="{{ route('eventos.show') }}">-->
                        <img src="{{ asset('assets/media/eventos/CAPACITACION-CMED.png') }}" alt="Participa en esta actividad" class="aligncenter">
                    <!--</a>-->
                </p>


            </div>
        </div>
    </div>

@endsection

@push('styles')
    <style>
        .aligncenter {
            max-height: 600px !important;
        }

        @media only screen and (max-width: 700px) {
            .aligncenter {
                max-height: 280px !important;
            }
        }
    </style>
@endpush
