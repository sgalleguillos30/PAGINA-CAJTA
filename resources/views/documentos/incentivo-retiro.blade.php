@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Documentos
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('documentos.index') }}">Documentos</a></li>
    <li class="sep">/</li>
    <li>Incentivo al Retiro</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Documentación</h4>
            <h3>Incentivo al Retiro</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <p class="mt-4">Haga click en cualquiera de los ítems para ver y/o descargar el archivo.</p>
                <ul>
                    <li><a class="opensans" href="{{ asset('assets/docs/documentos/inc-retiro/incentivo_al_retiro.pdf') }}" target="_blank">Incentivo al Retiro.</a></li>
                    <li><a class="opensans" href="{{ asset('assets/docs/documentos/inc-retiro/instrucciones_postulaciones_2016.pdf') }}" target="_blank">Instrucciones para Postulaciones año 2016.</a></li>
                    <li><a class="opensans" href="{{ asset('assets/docs/documentos/inc-retiro/ley-20948_03-SEP-2016.pdf') }}" target="_blank">Ley 20.948.</a></li>
                    <li><a class="opensans" href="{{ asset('assets/docs/documentos/inc-retiro/presentacion_DIPRES_funcionarios.pdf') }}" target="_blank">Presentación DIPRES.</a></li>
                </ul>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
