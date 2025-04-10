@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Participación Ciudadana
@endsection

@push('breadcrumbs')
    <li>Participación Ciudadana</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Mecanismos de</h4>
            <h3>Participación Ciudadana</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title">Participación Ciudadana</h3>

                <p>La participación ciudadana consiste en el involucramiento activo de los ciudadanos y las ciudadanas en los procesos de toma de decisiones públicas que tienen repercusión en sus vidas. Esto recibió reconocimiento legal en nuestro país con la entrada en vigencia de la Ley sobre Asociaciones y Participación Ciudadana en la Gestión Pública, que incorporó en nuestra legislación la afirmación de que "el Estado reconoce a las personas el derecho de participar en sus políticas, planes, programas y acciones".</p>
                <p>
                    Documentos:
                    <ul class="opensans">
                        <li><a href="{{ asset('assets/docs/partciudadana/general/NormaGeneralParticipacionCiudadana03.pdf') }}" class="blue opensans" target="_blank">Norma General de la Participación Ciudadana</a></li>
                        <li><a href="{{ asset('assets/docs/partciudadana/general/res_exenta_1010-2018.pdf') }}" class="blue opensans" target="_blank">Resolución Exenta 1010/2018 - Modifica Resolución 051/2015 que Norma General de la Participación Ciudadana</a></li>
                        <li><a href="{{ asset('assets/docs/partciudadana/general/NormaEspecificaParticipacionCiudadanaCAJTA.pdf') }}" class="blue opensans" target="_blank">Norma específica de la Participación Ciudadana</a></li>
                        <li><a href="{{ asset('assets/docs/partciudadana/general/res520_Abril2018.pdf') }}" class="blue opensans" target="_blank">Resolución Exenta 520</a></li>
                        <li><a href="{{ asset('assets/docs/partciudadana/general/Instructivo-Presidencial-007-de-2022.pdf') }}" class="blue opensans" target="_blank">Instructivo Presidencial 007-2022</a></li>
                        <li><a href="{{ asset('assets/docs/partciudadana/general/ORD-294-1-SEGPRES.pdf') }}" class="blue opensans" target="_blank">ORD. 294-2023 - MINSEGPRES</a></li>
                        <li><a href="{{ asset('assets/docs/partciudadana/general/res_exenta_0210-2024.pdf') }}" class="blue opensans" target="_blank">Resolución Exenta 210-2024</a></li>
                    </ul>
                </p>

                @include('pciudadana.layouts.otros-links')

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
