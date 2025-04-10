@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Participación Ciudadana
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('pciudadana.index') }}">Participación Ciudadana</a></li>
    <li class="sep">/</li>
    <li>Acceso a la Información Relevante</li>
@endpush


<?php
$dreg = \App\Model\Unidad::whereIn('id_tipounidad', [ \App\Model\TipoUnidad::DIRGEN , \App\Model\TipoUnidad::DIRREG])
    ->with('ciudad', 'usuariocargo', 'telefonounid')
    ->join('region', 'unidad.id_region', '=', 'region.id_region')
    ->orderBy('unidad.id_tipounidad', 'asc')
    ->orderBy('region.numero_reg', 'asc')
    ->get();
?>

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Participación Ciudadana</h4>
            <h3>Acceso a la Información Relevante</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title">Acceso a la Información Relevante</h3>

                <p>Uno de los pilares básicos de la participación ciudadana es el Acceso a la Información Relevante por parte de la ciudadanía sobre las políticas públicas sectoriales, planes, programase acciones y presupuestos. En este sentido, el Ministerio de Justicia y Derechos Humanos y sus Servicios Dependientes y/o Relacionados, entre los cuales se encuentra esta Corporación, deberán velar por el acceso, la calidad y la satisfacción de los(as) ciudadanos(as) sobre los servicios de su competencia.</p>
                <p>Los objetivos del acceso a la información relevante serán mejorar y fortalecer los canales, espacios de información y opinión de la ciudadanía, promoviendo una oportuna respuesta y de calidad, así como también, promover el control ciudadano de las acciones desarrolladas tanto por el Ministerio de Justicia, como por sus Servicios Dependientes y/o Relacionados.</p>

                <div class="texto-separacion"></div>
                <h4 class="bold blue">¿Dónde Contactarnos?</h4><br />


                @if ( count( $dreg ) > 0 )
                    @foreach ( $dreg as $dr )
                        <div class="pb-4 mb-3">
                            <h5 class="titleborder bold text-center pre-ul">{{ $dr->nombre_unidad }}</h5>

                            <dl class="dl-horizontal">
                                <dt style="font-size: 14px;">Dirección: </dt>
                                <dd> {{ $dr->direccion_unidad }}, {{ $dr->ciudad->ciudad }}</dd>

                                <dt style="font-size: 14px;">Horario de Atención: </dt>
                                <dd> 09:00 a 13:00 y 15:00 a 16:30</dd>
                                {{--@if( count($dr->diasatencion) > 0)
                                    @foreach( $dr->diasatencion as $at )
                                        <dd>
                                        {{ $at->dias_hdatencion }}
                                            (
                                            {{ $at->inicio_hdatencion }} -

                                            @if( !empty( $at->iniciocolacion_hdatencion ) )
                                                {{ $at->iniciocolacion_hdatencion }} / {{ $at->terminocolacion_hdatencion }} -
                                            @endif

                                            {{ $at->termino_hdatencion }}
                                            )
                                            @if( count($dr->diasatencion) > 1) </dd></dd> @endif
                                        </dd>
                                    @endforeach
                                @endif--}}

                                @if( count($dr->telefonounid) > 0 )
                                    <dt class="text-bold">{{ count($dr->telefonounid) === 1 ? "Teléfono:" : "Teléfonos:" }}</dt>
                                    <?php $contador = 0; ?>
                                    <dd>
                                        @foreach( $dr->telefonounid as $tel )
                                            {{ $tel->telefono_unid }}
                                            {{ ( $contador + 1 ) === count($dr->telefonounid) ? "" : "-"  }}
                                            <?php $contador++; ?>
                                        @endforeach
                                    </dd>
                                @endif

                                <dt style="font-size: 14px;">Correo Contacto: </dt>
                                <dd> <a href="mailto:{{ $dr->correo_unidad }}">{{ $dr->correo_unidad }}</a></dd>

                                <dt style="font-size: 14px;">{{ (int) $dr->usuariocargo->id_sexo === (int) \App\Model\Sexo::MASCULINO ? "Director" : "Directora" }} {{ (int) $dr->id_tipounidad === \App\Model\TipoUnidad::DIRGEN ? "General:" : "Regional:" }}</dt>
                                <dd> {{ $dr->usuariocargo->getUsername() }}</dd>
                            </dl>
                        </div>
                    @endforeach
                @endif




                @include('pciudadana.layouts.otros-links')

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
