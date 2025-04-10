@extends('layouts.estructura-inicial')


<?php
    $location = 'assets/docs/infoley/leykarin/normativa/';
    $info_normativa =
[
    [
        "name" => "Ley 21.643 - BCN - Modifica el Código del Trabajo y otros cuerpos legales en materia de prevención, investigación y sanción del acoso laboral, sexual o de violencia en el trabajo.",
        "file_location" => "01-ley-21643_15-ene-2024.pdf",
    ], [
        "name" => "Decreto 122 - BCN - Promulga el convenio 190 sobre la violencia y el acoso de la organización internacional del trabajo.",
        "file_location" => "02-convenio-190-aprobado-por-decreto-112.pdf",
    ], [
        "name" => "Circular Nº3813 - SUCESO",
        "file_location" => "03-circular-suceso-2024.pdf",
    ], [
        "name" => "Dictamen Contraloría General de la República Nº E516610 / 2024 - Imparte instrucciones sobre las modificaciones que la Ley Nº21.643 (Ley Karin) Introdujo en las leyes Nºs 18.575 y 18.883, en materia de prevención, investigación y sanción del acoso laboral, sexual o de violencia en el trabajo.",
        "file_location" => "04-dictamen-cgr-e516610-19-07-2024.pdf",
    ], [
        "name" => "Decreto 21 - Min. del Trabajo y Previsión Social - Aprueba reglamento que establece las directrices a las cuales deberán ajustarse los procedimientos de investigación de acoso sexual, laboral o de violencia en el trabajo.",
        "file_location" => "05-reglamento_Ley_Karin_1720014617-toma-razon.pdf",
    ], [
        "name" => 'ORD. Nº PIN-OO-00560-2024 - Dirección Nacional del Servicio Civil - Informa lineamientos para la implementación de la ley 21.643 "Ley Karin" en los servicios públicos.',
        "file_location" => "06-servcivil_1721430681.pdf",
    ], [
        "name" => "Resolución 922 EXENTA - BCN - Formaliza procedimiento para la tramitación de los reclamos a que se refieren los artículos 160 del estatuto administrativo y 156 del estatuto administrativo para funcionarios municipales.",
        "file_location" => "07-res-exe-922_06-mayo-2023-cgr.pdf",
    ], [
        "name" => "Dictamen Contraloría General de la República Nº E523936 / 2024 - Imparte instrucciones sobre las modificaciones que la ley Nº21.643 (Ley Karin) introdujo al código del trabajo, en materia de prevención, investigación y sanción del acoso laboral, sexual o violencia en el trabajo, respecto de organismos públicos cuyo personal se rija por ese código.",
        "file_location" => "08-dictamen-cgr-e523936-06-08-2024.pdf",
    ]
];
?>

@section('title', 'CAJTA | Quienes Somos')

@push('breadcrumbs')
    <li>Quiénes somos</li>
    <li class="sep">/</li>
    <li>Resumen</li>
@endpush

@section('contenido')


    <div class="post">

        <div class="post-header-img2"></div>
        
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title text-center">Documentos normativa legal vigente</h3>

                <ul class="gobcl">
                    @foreach ($info_normativa as $info)
                        <li class="text-justify py-3">
                            <a href="{{ asset( $location . $info['file_location']) }}" target="_blank">{{ $info['name'] }}</a>
                        </li>
                    @endforeach
                </ul>

                <div class="text-center">
                    <a href="{{ route('infoleyes.leykarin.index') }}" class="btn btn-danger py-3 px-4 opensans">
                        <i class="fas fa-arrow-left"></i> Volver
                    </a>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection


@push('styles')
    <style>
        .main .post .post-header-img2 {
            width: 100%;
            height: auto;
            min-height: 178px;
            padding: 105px 30px 30px;
            border: 5px solid #3977a6;
            margin: auto;
            background: url('{{ asset('assets/images/Headers/ley-karin-header.png') }}');
            background-repeat: no-repeat !important;
            background-size: cover !important;
            background-position-y: 50% !important;
        }
    </style>
@endpush