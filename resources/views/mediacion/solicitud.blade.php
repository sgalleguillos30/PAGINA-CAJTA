@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Centro de Mediación
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('mediacion.index') }}">Centro de Mediación</a></li>
    <li class="sep">/</li>
    <li>Solicitud</li>
@endpush

<?php
    $listacomuna = \App\Model\Comuna::join('region', 'region.id_region', '=', 'comuna.id_region')->orderBy('numero_reg', 'ASC')->get();
    $listaSexo = \App\Model\Sexo::pluck('sexo', 'id_sexo');
    $listaEstadoCivil = \App\Model\EstadoCivil::pluck('estado_civil', 'id_estadocivil');
    $listaNacionalidad = \App\Model\Nacionalidad::pluck('nacionalidad', 'id_nacionalidad');
    $listaMaterias = \App\Model\CmedMateriaAtencion::pluck('cmed_materia_atencion', 'id_cmed_materia');
?>

@section('contenido')

    <div class="post">
        <div class="post-header">
            <h4>Solicitud</h4>
            <h3>Proceso de Mediación</h3>
        </div>

        <div class="clearfix"></div>

        <div class="texto">
            <h3 class="title">Llena el formulario</h3>
            <div class="contenido link-texto">
                <p>Te invitamos a solicitar un proceso de mediación por esta vía y nuestros profesionales se pondrán en contacto para agendar la atención correspondiente. Necesitamos tanto tus datos como el de la persona con quien necesitas llevar a cabo el proceso.</p>

                <div class="alert alert-info p-5">
                    <h4 class="bold">IMPORTANTE:</h4>
                    <p>Informamos que nuestro <span class="bold">Centro de Mediación</span> tiene jurisdicción para la atención dentro de la Región de Tarapacá, específicamente en las comunas de Iquique y Alto Hospicio. También se encuentra dentro de la atención las personas de la la comuna de Pozo Almonte y la provincia del Tamarugal, siempre y cuando, una de las partes tenga residencia en la comuna de Iquique.</p>
                    <p>Si no cumple con los requisitos mencionados, y su residencia se encuentra dentro de las regiones de Arica y Pariancota o Antofagasta, nuestro Centro de Mediación solo podrá entregar <span class="bold">Orientación e Información</span> sobre el proceder de su solicitud.</p><br />

                    <p>Se debe tener presente que, de acuerdo a lo establecido en el artículo 106 de la ley 19.968, las causas relativas al derecho de alimentos, cuidado personal y al derecho de los padres e hijos e hijas que vivan separados a mantener una relación directa y regular, aun cuando se deban tratar en el marco de una acción de divorcio o separación judicial, deberán someterse a un procedimiento de mediación previo a la interposición de la demanda, el que se rige por las normas de dicha ley y su reglamento y tales casos  no serán ingresados a esta unidad,  por lo que estos usuarios deberán concurrir al mediador de su confianza y, en caso de no tener recursos para costear el trámite, a los sistemas de mediación licitadas que operen en la comuna de su domicilio y cuyos datos de contacto podrá obtener en la pagina <a class="blue bold opensans" target="_blank" href="https://www.mediacionchile.cl/sitioumed/tarapaca/">Mediación Chile</a>, o requiriendo dicha información directamente en la SEREMI de Justicia y Derechos Humanos de Tarapacá.</p>

                </div>

                <p><span class="text-bold">No todos los datos son obligatorios</span>, solo los que tienen un asterisco (<span class="obligatorio">*</span>) al lado de su nombre.</p>

                <div class="texto-separacion"></div>

                @include('layouts.fijos.messages-flash-box')

                <div class="col-md-12">

                    <form
                        action="{{ route('mediacion.registro') }}"
                        class="form form-horizontal"
                        method="POST"
                        autocomplete="off"
                        novalidate
                    >
                        @csrf

                        @include('mediacion.form.formParte1')
                        @include('mediacion.form.formParte2')
                        @include('mediacion.form.formParte3')


                        <div class="form-group mt-5">
                            <div class="justify-content-center row col-sm-12">
                                <input type="submit" class="btn btn-danger p-3" id="btnMensaje" value="Enviar Solicitud"> &nbsp;&nbsp;
                                <a href="{{ route('home') }}" class="btn btn-offset-default btn-outline-danger p-3">Cancelar</a>
                            </div>
                        </div>
                    </form>

                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>


@endsection



@push('adicional')
    {{--<div class="clearfix"></div>--}}

    {{--<div class="stream">--}}
        {{--<div class="post">--}}
            {{--<div class="texto">--}}
                {{--<h3 class="title">Solicita un proceso de mediación vía web</h3>--}}
                {{--<div class="contenido link-texto">--}}

                    {{--<p>Completa el siguiente formulario para hacer tu solicitud, y nuestros profesionales te contactarán:</p>--}}

                    {{--<div class="row col-md-12 justify-content-center">--}}
                        {{--<a href="{{ route('mediacion.solicitud') }}" class="btn btn-danger p-5 bold" style="font-size: 18px !important;">--}}
                            {{--<i class="far fa-calendar-alt"></i> &nbsp; Haz tu solicitud aquí!--}}
                        {{--</a>--}}
                    {{--</div>--}}

                    {{--<div class="clearfix"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    {{--<div class="clearfix"></div>--}}
@endpush

