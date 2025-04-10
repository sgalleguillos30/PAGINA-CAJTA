@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Documentos
@endsection

@push('breadcrumbs')
    <li>Documentos</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Documentación</h4>
            <h3>Documentos varios</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <p class="mt-4">Haga click en cualquiera de los ítems para ver y/o descargar el archivo.</p>
                <ul>
                    <li><a class="opensans" href="{{ asset('assets/docs/documentos/docforms/Mecanismo_ Focalizacion_ CJ_ 2024.pdf') }}" target="_blank">Mecanismo de Focalización para los Consultorio Jurídicos 2024.</a></li>
                    <li><a class="opensans" href="{{ asset('assets/docs/documentos/docforms/modelo_de_atencion_scc_2015-junio.pdf') }}" target="_blank">Modelo de Atención Solución Colaborativa de Conflictos.</a></li>
                    <li><a class="opensans" href="{{ asset('assets/docs/documentos/docforms/Manual_Capacitacion_Consesuado_Abril-2015.pdf') }}" target="_blank">Manual de Capacitación Consensuado Abril 2015.</a></li>
                    {{-- <li><a class="opensans" href="{{ asset('assets/docs/documentos/docforms/mecanismo_focalizacion_ODL_27-01-2015.pdf') }}" target="_blank">Mecanismo Focalización ODL 27-01-2015.</a></li> --}}
                    <li><a class="opensans" href="{{ asset('assets/docs/documentos/docforms/practica_profesional_postulantes.pdf') }}" target="_blank">Práctica Profesional.</a></li>
                    <li><a class="opensans" href="{{ asset('assets/docs/documentos/docforms/manual_evaluacion_desempeno_2013.pdf') }}" target="_blank">Manual de Evaluación de Desempeño 2013.</a></li>
                    <li><a class="opensans" href="{{ asset('assets/docs/documentos/docforms/manual_de_obtencion_de_personal_2013.pdf') }}" target="_blank">Manual de Obtención de Personal.</a></li>
                </ul>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
