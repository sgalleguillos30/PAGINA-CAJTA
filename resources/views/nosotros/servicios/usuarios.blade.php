@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Quienes Somos
@endsection

@push('breadcrumbs')
    <li>Quiénes somos</li>
    <li class="sep">/</li>
    <li>Servicios</li>
    <li class="sep">/</li>
    <li>Usuarios</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Servicios</h4>
            <h3>Nuestros Usuarios</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title">Derechos y Obligaciones de los Usuarios</h3>
                <p>Los usuarios de la institución tienen debéres y derechos que es preciso que conozcan cuando solicitan los servicios.</p>

                <div class="texto-separacion"></div>

                <h3 class="title">Derechos</h3>
                <ul>
                    <li>Recibir atención profesional.</li>
                    <li>Ser derivados de manera responsable y formal. Si se trata de derivación externa, otra entidad pública o privada debe referirse con una “Carta de Derivación Institucional”; en caso de derivación interna se debe, además, gestionar con el Centro de Atención día, hora y profesional que atenderá a la persona derivada.</li>
                    <li>Ser escuchado y tratado en forma respetuosa.</li>
                    <li>Ser informado respecto de los servicios institucionales y las opciones de intervención en relación con su problemática.</li>
                    <li>Ser atendido en forma oportuna y eficiente, considerando los recursos institucionales.</li>
                    <li>Ser informado permanentemente sobre el desarrollo del juicio, trámite y/o gestión.</li>
                    <li>Ser informado del procedimiento a seguir ante un reclamo o sugerencia.</li>
                    <li>Ser patrocinado y representado ante Tribunales, previa calificación socioeconómica y análisis de viabilidad jurídica.</li>
                    <li>Ser informado de las razones por las cuales no cumple requisito para que su caso sea atendido por la Corporación. Éstas deben ser registradas en la ficha de primera atención.</li>
                </ul>

                <div class="texto-separacion"></div>

                <h3 class="title">Obligaciones</h3>
                <ul>
                    <li>Presentar en tiempo y forma los documentos y/o antecedentes que soliciten los profesionales para realizar la gestión solicitada.</li>
                    <li>Acudir a las citaciones tanto de los profesionales como de los tribunales.</li>
                    <li>Tener un trato respetuoso con los funcionarios de la Institución y disposición para buscar solución a su problemática.</li>
                    <li>Firmar la declaración jurada institucional, cuando el conflicto jurídico amerite la intervención profesional.</li>
                    <li>Proporcionar los antecedentes y documentación que permitan realizar la evaluación socioeconómica; norma institucional para proporcionar la gratuidad de la Asistencia Jurídica.</li>
                    <li>Proporcionar siempre información fidedigna y no omitir antecedentes.</li>
                </ul>

                <h3 class="title"></h3>

                <h4 class="bold center blue">EL INCUMPLIMIENTO DE CUALQUIERA DE ESTAS OBLIGACIONES, FACULTA A LA CORPORACIÓN PARA CANCELAR Y REVOCAR EL PATROCINIO.</h4>


            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
