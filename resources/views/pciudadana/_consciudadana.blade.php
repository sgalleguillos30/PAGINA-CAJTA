@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Participación Ciudadana
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('pciudadana.index') }}">Participación Ciudadana</a></li>
    <li class="sep">/</li>
    <li>Consulta Ciudadana</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Participación Ciudadana</h4>
            <h3>Consulta Ciudadana</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title">Consulta Ciudadana</h3>

                <p>Las Consultas Ciudadanas son aquel proceso por medio del cual se comunica e incorpora a la ciudadanía en la consulta, opinión, aporte u observación de las distintas etapas de diseño, evaluación y ejecución de las políticas públicas, permitiendo que ésta actúe como contraparte. Se deberá propender a consultar sobre materias de importancia del Servicio y que estén en sintonía con las políticas de gobierno</p>

                <p>La consulta pretende generar una respuesta de la autoridad que incluya las respuestas y compromisos derivados de los planteamientos surgidos durante la consulta.</p><br />

                <h5 class="bold">Informes Consulta Ciudadana </h5>
                <ul>
                    <li><a target="_blank"  class="opensans" href="{{ asset('assets/docs/partciudadana/consciudadana/2019/CONSULTA-CIUDADANA-2019.pdf') }}">Informe Consulta Ciudadana 2019.</a></li>
                    <li><a target="_blank"  class="opensans" href="{{ asset('assets/docs/partciudadana/consciudadana/2018/CONSULTA-CIUDADANA-2018.pdf') }}">Informe Consulta Ciudadana 2018.</a></li>

                    <li><a target="_blank"  class="opensans" href="{{ asset('assets/docs/partciudadana/consciudadana/2017/CONS_CIUDADANA2017.pdf') }}">Informe Consulta Ciudadana 2017.</a></li>

                    <li><a target="_blank"  class="opensans" href="{{ asset('assets/docs/partciudadana/consciudadana/2016/Informe-Consulta-Ciudadana-2016.pdf') }}">Informe Consulta Ciudadana 2016.</a></li>
                </ul>



                @include('pciudadana.layouts.otros-links')

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
