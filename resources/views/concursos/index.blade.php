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
            <h4>Llamados a Concursos</h4>
            @if ( $concurso !== "Vacio" )
                <h3>{{ $concurso->first()->estadoconcurso->estado_concurso }}</h3>
            @endif
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <div class="btn-group btn-group-lg btn-group-custom" role="group">
                    @foreach( \App\Model\EstadoConcurso::all() as $estadoconcurso )
                        <a
                            href="{{ route('concursos.index', ['estadoconcurso' => $estadoconcurso->id_estadoconc]) }}"
                            type="button"
                            class="btn btn-danger opensans{{ ($concurso !== "Vacio" and (int)$estadoconcurso->id_estadoconc === (int) $concurso->first()->id_estadoconc ) ? " active" : "" }}"
                        >
                            Concursos <br />
                            {{ (int) $estadoconcurso->id_estadoconc === (int) \App\Model\EstadoConcurso::ABIERTO ? $estadoconcurso->estado_concurso : ( $estadoconcurso->estado_concurso ."s") }}
                        </a>
                    @endforeach
                </div>
                <div class="clearfix"></div>

                @if ( $concurso !== "Vacio")
                    <h3 class="title">
                        Concursos {{ (int) $concurso->first()->id_estadoconc === (int) \App\Model\EstadoConcurso::ABIERTO ? $concurso->first()->estadoconcurso->estado_concurso : ( $concurso->first()->estadoconcurso->estado_concurso ."s") }}
                    </h3>

                    {{--<div class="row">--}}
                    @forelse ($concurso as $c)
                        <div class="row lista-concurso">
                            <div class="cuadro-concurso">
                                <div class="col-md-9">
                                    <dl>
                                        <dt class="opensans blue">{{ $c->titulo_concurso }}</dt>
                                        <dd><span class="bold">Tipo Proceso: </span>{{ $c->tipoproceso->tipo_proceso }}</dd>
                                        <dd><span class="bold">Inicio Concurso:</span> {{ Carbon\Carbon::parse($c->finicio_concurso)->translatedFormat('d \d\e F \d\e Y') }}</dd>

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
                    {{--</div>--}}

                @else
                    @include('layouts.fijos.messages-box', ['message' => 'No hay concursos registrados para este tipo.'])
                @endif




            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
