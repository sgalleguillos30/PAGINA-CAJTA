@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Concursos
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('concursos.index', ['estadoconcurso' => \App\Model\EstadoConcurso::ABIERTO]) }}">Concursos</a></li>
    <li class="sep">/</li>
    <li>Información Concurso</li>
@endpush

@section('contenido')

    <div class="post">
        <div class="post-header">
            <h4>Detalle</h4>
            <h3>Concurso</h3>
        </div>
        <div class="clearfix"></div>
        <div class="texto">
            <div class="contenido">

                <h3 class="title">{{ $concurso->titulo_concurso }}</h3>

                <div class="tabla-info">
                    <div class="info">
                        <dl class="opensans">
                            @if( !empty($concurso->codigo_concurso) )
                                <dt>Código Concurso</dt>
                                <dd>{{ $concurso->codigo_concurso }}</dd>
                            @endif
                            @if ( count( $concurso->cargovacante ) === 0 )
                                <dt>Cargo a Postular:</dt>
                                <dd>Sin información.</dd>
                            @elseif( count( $concurso->cargovacante) === 1 )
                                <dt>Cargo a Postular:</dt>
                                <dd>{{ $concurso->cargovacante->first()->cargo_vacante }}</dd>

                                <dt>Número vacantes:</dt>
                                <dd>{{ $concurso->cargovacante->first()->cupo_vacante }}</dd>
                            @else
                                <dt>Cargos a postular:</dt>
                                @foreach ($concurso->cargovacante as $cv)
                                    <dd>{{ $cv->cargo_vacante }} ( {{ $cv->cupo_vacante === 1 ? "1 vacante" : ($cv->cupo_vacante) . " vacantes" }} )</dd>
                                @endforeach
                            @endif

                            <dt>Unidad:</dt>
                            <dd>
                                <a href="{{ route('unidad.show', ['unidad' => $concurso->id_unidad]) }}" class="blue">{{ $concurso->unidad->nombre_unidad }}</a>
                            </dd>

                            <dt>Tipo Contratación:</dt>
                            <dd>{{ $concurso->tipocontrato->tipo_contrato }}</dd>
                        </dl>
                    </div>

                    <div class="info">
                        <dl class="opensans">
                            @if( !empty($concurso->correo_concurso) )
                                <dt>Correo para consultas</dt>
                                <dd>
                                    <a class="opensans" href="mailto:{{ $concurso->correo_concurso }}">
                                        {{ $concurso->correo_concurso }}
                                    </a>
                                </dd>
                            @endif

                            <dt>Estado Concurso:</dt>
                            <dd>{{ $concurso->estadoconcurso->estado_concurso }}</dd>

                            <dt>Tipo Concurso</dt>
                            <dd>{{ $concurso->tipoproceso->tipo_proceso }}</dd>

                            <dt>Inicio Concurso</dt>
                            <dd>{{ Carbon\Carbon::parse($concurso->finicio_concurso)->translatedFormat('d \d\e F \d\e Y') }}</dd>

                            @if ( !empty($concurso->ftermino_concurso))
                                <dt>Término Concurso</dt>
                                <dd>{{ Carbon\Carbon::parse($concurso->ftermino_concurso)->translatedFormat('d \d\e F \d\e Y') }}</dd>
                            @endif
                        </dl>
                    </div>
                    <div class="clearfix"></div>

                    @if( !empty($concurso->finicio_post_concurso) and !empty( $concurso->finicio_post_concurso ) )
{{--                        <h4 class="title blue mt-4">Postulación al Concurso</h4><hr />--}}
                        <div class="tabla-info opensans">
                            <div class="info">
                                <dl>
                                    <dt>Fecha inicio postulación</dt>
                                    <dd>{{ $concurso->finicio_post_concurso->translatedFormat('d \d\e F \d\e Y') }}</dd>
                                </dl>
                            </div>
                            <div class="info">

                                <dl>
                                    <dt>Fecha término postulación</dt>
                                    <dd>{{ $concurso->ftermino_post_concurso->translatedFormat('d \d\e F \d\e Y') }}</dd>
                                </dl>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    @endif

                    @if (
                        !empty($concurso->finicio_post_concurso) and !empty( $concurso->finicio_post_concurso ) and
                        !empty($concurso->link_postulacion_concurso ) and
                        ( \Carbon\Carbon::now('America/Santiago') >= $concurso->finicio_post_concurso ) and
                        ( \Carbon\Carbon::now('America/Santiago') <= $concurso->ftermino_post_concurso )
                        )
                        <dl class="alert alert-info">
                            <dt style="font-size: 20px;" class="py-2">¿Cómo postular?:</dt>
                            <dd class="pb-2 opensans">
                                Las postulaciones deberán hacerse en modalidad reclutamiento en
                                línea a través del Portal de Empleos Públicos.
                            </dd>
                            <dd class="pb-2 text-center">
                                <a
                                    href="{{ $concurso->link_postulacion_concurso }}"
                                    target="_blank"
                                    class="btn btn-primary text-bold"
                                >
                                    Haga click aquí para hacer su postulación
                                </a>
                            </dd>
                        </dl>
                    @endif

                    @if ( !empty($concurso->objetivo_concurso))
                        <dl class="alert alert-danger">
                            <dt>Mensajes:</dt>
                            <dd>{!!  $concurso->objetivo_concurso !!}</dd>
                        </dl>
                    @endif


                    <div class="texto-separacion"></div>

                    <h4 class="title blue">Estado Concurso y Documentos Adjuntos</h4><hr />

                    @if ( count($concurso->procesoconcurso) > 0 )
                        <p>Haga click en cualquiera de los ítems para ver y/o descargar el archivo.</p>

                        <ul>
                            @foreach ($concurso->procesoconcurso as $proceso)
                                <li>
                                    [ {{ \Carbon\Carbon::parse($proceso->creado_procesoconc)->format('d-m-Y') }} ]
                                    <a href="{{ asset('assets/docs/concursos/' . $proceso->adjunto_procesoconc) }}"  target="_blank">
                                        {{ $proceso->nombre_procesoconc }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    @else
                        @include('layouts.fijos.messages-box', ['message' => 'No hay documentos adjuntos para este concurso.'])
                    @endif

                    <div class="texto-separacion"></div><hr />
                    <h4 class='title pt-4 text-bold'>Condiciones Generales</h4>
                    <p class="italic">Este calendario puede sufrir modificaciones, lo que no alterará el proceso de selección. No obstante, de haber modificaciones estas serán debidamente informadas.</p>
                    <p class="italic">Será responsabilidad de cada postulante consultar la página web a fin de revisar el estado de avance dentro del presente concurso y asistir a las convocatorias en la fecha y hora que se fije en cada caso.</p><hr />
                    <div class="texto-separacion"></div>
                    <a href="{{ route('concursos.index', ['estadoconcurso' => \App\Model\EstadoConcurso::ABIERTO]) }}" class="btn btn-danger">
                        &laquo; Ver otros concursos
                    </a>
                </div>

                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection
