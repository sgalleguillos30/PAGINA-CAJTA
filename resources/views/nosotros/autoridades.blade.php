@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Quienes Somos
@endsection

@push('breadcrumbs')
    <li>Quiénes somos</li>
    <li class="sep">/</li>
    <li>Jefes Superiores del Servicio</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Jefes Superiores del Servicio</h4>
            <h3>{{ $usuario->cargo_us }}</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <p style="text-align: center !important">
                    <img src="{{ asset('assets/media/usuario/' . $usuario->imagen_us) }}" alt="{{ $usuario->getUsername() }}" class="aligncenter" style="max-height: 400px;">
                </p>
                <h3 class="title text-center">{{ $usuario->getUsername() }}</h3>

                @if ( empty( $usuario->historiafunc ) )
                    @include('layouts.fijos.messages-box', ['message' => 'No hay información disponible.'])
                @else
                    {!! $usuario->historiafunc->historia_funcionario !!}
                @endif
                <br /><hr />
                <div class="texto-separacion"></div>
                <p>Puedes solicitar audiencia a {{ $usuario->getUsername() }} en línea a través de <a href="https://www.leylobby.gob.cl/instituciones/AK010" target="_blank" class="blue opensans bold">Lobby</a> o en su oficina de atención:</p>

                <p>
                    <span class="text-bold">Dirección:</span> {{ $usuario->unidad->direccion_unidad }}, {{ $usuario->unidad->ciudad->ciudad }}<br />

                    {{--HORARIO DE ATENCION--}}
                    @if( count($usuario->unidad->diasatencion) > 0)
                        <span class="text-bold">Horario de Atención:</span>
                        @foreach( $usuario->unidad->diasatencion as $at )
                            {{ $at->dias_hdatencion }}
                            (
                            {{ $at->inicio_hdatencion }} -

                            @if( !empty( $at->iniciocolacion_hdatencion ) )
                                {{ $at->iniciocolacion_hdatencion }} / {{ $at->terminocolacion_hdatencion }} -
                            @endif

                            {{ $at->termino_hdatencion }}
                            )
                            @if( count($usuario->unidad->diasatencion) > 1) <br /> @endif
                        @endforeach
                    @endif <br/>

                    {{--NUMERO TELEFONICO--}}
                    @if( count($usuario->unidad->telefonounid) > 0 )
                        <span class="text-bold">{{ count($usuario->unidad->telefonounid) === 1 ? "Teléfono:" : "Teléfonos:" }}</span>
                        <?php $contador = 0; ?>
                        @foreach( $usuario->unidad->telefonounid as $tel )
                            {{ $tel->telefono_unid }}
                            {{ ( $contador + 1 ) === count($usuario->unidad->telefonounid) ? "" : "-"  }}
                            <?php $contador++; ?>
                        @endforeach
                    @endif <br />

                    @if (!empty($usuario->unidad->correo_unidad) )
                        <span class="text-bold">Correo contacto:</span>
                        <a href="mailto:{{ $usuario->unidad->correo_unidad }}" class="blue bold opensans">{{ $usuario->unidad->correo_unidad }}</a>
                    @endif
                </p>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
