@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Nuestras Oficinas
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('unidad.index') }}">Nuestras Oficinas</a></li>
    <li class="sep">/</li>
@endpush

@section('contenido')


    <div class="post">
        @php $imagen = ( !empty($unidad->imagen_unidad) ? $unidad->imagen_unidad : "PERSONAS.png" ); @endphp
        <div class="post-header-img" style="background: url('{{ asset('assets/media/unidad/'. $imagen) }}');"></div>

        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">
                <h3 class="title text-center">{{ $unidad->nombre_unidad }}</h3>

                <p><span class="text-bold">Dirección:</span> {{ $unidad->direccion_unidad }}, {{ $unidad->ciudad->ciudad }}</p>

                {{--NUMERO TELEFONICO--}}
                @if( count($unidad->telefonounid) > 0 )
                    <dl class="row" style="font-size: 16px;">
                        <?php $contador = 1; ?>

                        @foreach( $unidad->telefonounid as $tel )
                            <dt class="text-bold col-md-2">
                                @if( $contador === 1 )
                                    {{ count($unidad->telefonounid) === 1 ? "Teléfono:" : "Teléfonos:" }}
                                @endif
                            </dt>
                            <dd class="col-md-10 {{ $contador === 1 ? "pb-2" : "py-2" }}">
                                @if( $tel->tiene_wsp )
                                    <a href="https://wa.me/{{ $tel->telefono_unid }}" target="_blank">
                                        {{ $tel->phoneFormat() }}
                                        <i
                                            class="fab fa-whatsapp text-bold"
                                            style="font-size: 20px; color: #128C7E; margin-right: 5px;"
                                        ></i>
                                    </a>
                                @else
                                    {{ $tel->phoneFormat() }}
                                @endif
                            </dd>

                            <?php $contador++; ?>
                        @endforeach
                    </dl>
                @endif

                {{--HORARIO DE ATENCION--}}
                @if( count($unidad->diasatencion) > 0)
                    <p>
                        <span class="text-bold">Horario de Atención:</span>
                        @foreach( $unidad->diasatencion as $at )
                            {{ $at->dias_hdatencion }}
                            (
                            {{ $at->inicio_hdatencion }} -

                            @if( !empty( $at->iniciocolacion_hdatencion ) )
                                {{ $at->iniciocolacion_hdatencion }} / {{ $at->terminocolacion_hdatencion }} -
                            @endif

                            {{ $at->termino_hdatencion }}
                            )
                            @if( count($unidad->diasatencion) > 1) <br /> @endif
                        @endforeach
                    </p>
                @endif

                {{--CORREO DE CONTACTO--}}
                @if (!empty($unidad->correo_unidad) )
                    <p>
                        <span class="text-bold">Correo contacto:</span>
                        <a href="mailto:{{ $unidad->correo_unidad }}" class="blue bold opensans">{{ $unidad->correo_unidad }}</a>
                    </p>
                @endif

                {{--NOMBRE DE ABOGADO JEFE DE UNIDAD--}}
                @if (!empty($unidad->abojefe_unidad) )
                    <p>
                        <span class="text-bold">{{ $unidad->usuariocargo->cargo_us }}:</span>
                        {{ $unidad->usuariocargo->getUsername() }}
                    </p>
                @endif

                {{--DESCRIPCION UNIDAD--}}
                <p>
                    <span class="text-bold">Sobre esta unidad:</span><br />
                    {!! $unidad->descripcion_unid->descripcion_unid !!}
                </p>

                {{--CATALOGO MATERIAS DE LA UNIDAD--}}
                @if ( count($unidad->materiaunidad) > 0 )
                    <p>
                        <span class="text-bold">Sobre los temas que puedes ser atendido en esta unidad:</span><br />
                        <?php $materia = 0; ?>
                        @foreach ( $unidad->materiaunidad as $mat)
                            {!!   $mat->listamaterias->materia_listamat !!}
                        @endforeach
                    </p>
                @endif

                {{--COBERTURA--}}
                @if ( (int) $unidad->id_unidad !== 1 and count($unidad->cobertura) > 0 )
                    <p>
                        <span class="text-bold">Esta unidad ofrece la siguiente cobertura:</span><br />
                        <?php $cob = 0; ?>
                        @foreach ($unidad->cobertura as $cobertura)
                            {{ ( empty($cobertura->id_region) and !empty($cobertura->id_comuna) ) ? ("Comuna de " . $cobertura->comuna->comuna . "") : $cobertura->region->region }}
                            {{ ( $cob + 1 ) === count($unidad->cobertura) ? "" : ", "  }}
                            <?php $cob++; ?>
                        @endforeach
                    </p>
                @endif

                {{--DEPENDENCIA UNIDAD--}}
                @if ( !empty( $unidad->dependencia_unid ) )
                    <div class="texto-separacion"></div><hr />
                    <p class="italic">El {{ $unidad->nombre_unidad }} depende actualmente de <a href="{{ route('unidad.show', ['unidad' => $unidad->dependencia_unid->id_unidad]) }}" class="opensans blue bold">{{ $unidad->dependencia_unid->unidad->nombre_unidad }}</a>.</p>

                    <p class="italic">
                        <span class="text-bold">{{ $unidad->dependencia_unid->unidad->usuariocargo->cargo_us }}:</span> {{ $unidad->dependencia_unid->unidad->usuariocargo->getUsername() }}<br />
                        <span class="text-bold">Dirección:</span> {{ $unidad->dependencia_unid->unidad->direccion_unidad }}, {{ $unidad->dependencia_unid->unidad->ciudad->ciudad }}<br />

                        {{--HORARIO DE ATENCION--}}
                        @if( count($unidad->dependencia_unid->unidad->diasatencion) > 0)
                            <span class="text-bold">Horario de Atención:</span>
                            @foreach( $unidad->dependencia_unid->unidad->diasatencion as $at )
                                {{ $at->dias_hdatencion }}
                                (
                                {{ $at->inicio_hdatencion }} -

                                @if( !empty( $at->iniciocolacion_hdatencion ) )
                                    {{ $at->iniciocolacion_hdatencion }} / {{ $at->terminocolacion_hdatencion }} -
                                @endif

                                {{ $at->termino_hdatencion }}
                                )
                                @if( count($unidad->diasatencion) > 1) <br /> @endif
                            @endforeach
                        @endif <br/>


                        {{--NUMERO TELEFONICO--}}
                        @if( count($unidad->dependencia_unid->unidad->telefonounid) > 0 )
                            <span class="text-bold">{{ count($unidad->dependencia_unid->unidad->telefonounid) === 1 ? "Teléfono:" : "Teléfonos:" }}</span>
                            <?php $contadorDep = 0; ?>
                            @foreach( $unidad->dependencia_unid->unidad->telefonounid as $tel )
                                {{ $tel->telefono_unid }}
                                {{ ( $contadorDep + 1 ) === count($unidad->dependencia_unid->unidad->telefonounid) ? "" : "-"  }}
                                <?php $contadorDep++; ?>
                            @endforeach
                        @endif <br />


                        <span class="text-bold">Correo contacto:</span> <a href="mailto:{{ $unidad->dependencia_unid->unidad->correo_unidad }}" class="opensans blue bold">{{ $unidad->dependencia_unid->unidad->correo_unidad }}</a>
                    </p>

                @endif

                <div class="text-center"><hr /><br />
                    <a href="{{ route('unidad.index') }}" class="btn btn-danger text-center" style="font-size: 15px;">&laquo; Volver</a>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
