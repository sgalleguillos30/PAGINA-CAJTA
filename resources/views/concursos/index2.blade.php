@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Concursos
@endsection

@push('breadcrumbs')
    <li>Concursos</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Llamados a</h4>
            <h3>Concursos</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <ul class="nav nav-pills mb-5 pb-5 nav-justified" id="pills-tab" role="tablist">
                    @foreach ($econc as $e)
                        <li class="nav-item">
                            <a
                                class="nav-link {{ $e->id_estadoconc === 1 ? "active" : "" }}"
                                id="pills-{{ $e->id_estadoconc }}-tab"
                                data-toggle="pill"
                                href="#pills-{{ $e->id_estadoconc }}"
                                role="tab"
                                aria-controls="pills-{{ $e->id_estadoconc }}"
                                aria-selected="true"
                            >
                                Concursos <br /> {{ (int) $e->id_estadoconc === (int) \App\Model\EstadoConcurso::ABIERTO ? $e->estado_concurso : ( $e->estado_concurso ."s") }}
                            </a>
                        </li>
                    @endforeach
                </ul>

                <div class="tab-content" id="pills-tabContent">
                    @foreach ($econc as $e)
                        <div
                            class="tab-pane {{ $e->id_estadoconc === 1 ? "show active" : "" }}"
                            id="pills-{{ $e->id_estadoconc }}"
                            role="tabpanel"
                            aria-labelledby="pills-{{ $e->id_estadoconc }}-tab"
                        >
                            @forelse (\App\Model\Concurso::getConcursos($e->id_estadoconc) as $c)
                                <div class="row lista-concurso">
                                    <div class="cuadro-concurso">
                                        <div class="col-md-9">
                                            <dl>
                                                <dt class="opensans blue">{{ $c->titulo_concurso }}</dt>
                                                <dd class="m-0 pt-2"><span class="bold">Tipo Proceso: </span>{{ $c->tipoproceso->tipo_proceso }}</dd>
                                                <dd class="m-0"><span class="bold">Inicio Concurso:</span> {{ Carbon\Carbon::parse($c->finicio_concurso)->translatedFormat('d \d\e F \d\e Y') }}</dd>
                                                <dd class="m-0"><span class="bold">Unidad: </span><a href="{{ route('unidad.show', ['unidad' => $c->unidad->id_unidad]) }}" class="blue gobcl">{{ $c->unidad->nombre_unidad }}</a></dd>

                                                @if ( !empty( $c->ftermino_concurso) )
                                                    <dd>
                                                        <span class="bold">Término Concurso:</span> {{ Carbon\Carbon::parse($c->ftermino_concurso)->translatedFormat('d \d\e F \d\e Y') }}
                                                        {!! (int) $c->id_estadoconc === (int) \App\Model\EstadoConcurso::ABIERTO ? "<strong>( Resuelto )</strong>" : "" !!}
                                                    </dd>
                                                @endif

                                                @if ( !empty($c->objetivo_concurso) )
                                                    <br /><dd class="alert alert-danger"><span class="bold">Mensajes:</span> <br /> {!!  $c->objetivo_concurso !!}</dd>
                                                @endif
                                            </dl>
                                        </div>

                                        <div class="col-md-3">
                                            <a href="{{ route('concursos.show', ['concurso' => $c->id_concurso]) }}" class="btn btn-danger btn-size opensans">
                                                <i class="fas fa-search"></i> Más información
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                @include('layouts.fijos.messages-box', ['message' => 'No hay registro de concursos en el sistema.'] )
                            @endforelse
                        </div>
                    @endforeach
                </div>


            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection


@push('styles')
    <style>
        .nav-pills .nav-link.active, .nav-pills .show > .nav-lin {
            color: #ffffff !important;
            font-weight: bold;
            background-color: #0f69b4;
        }
    </style>
@endpush
