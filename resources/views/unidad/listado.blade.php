@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Nuestras Oficinas
@endsection

@push('breadcrumbs')
    <li>Nuestras Oficinas</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Nuestras Oficinas</h4>
            <h3>Y Centros de Atención</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h4 class="bold">Estimado y estimada usuaria:</h4>
                <p>
                    Le informamos que todas nuestras oficinas se encuentran con <span class="text-bold">atención presencial</span> de
                    <span class="blue bold">09:00 a 14:00</span> horas de lunes a viernes, sin embargo, para asegurar su atención y
                    evitar tiempos de espera, le sugerimos pedir una cita por teléfonos o correo electrónico. (En la jornada de la tarde solo hay atención presencial previa citación y casos excepcionales).</p>
                <p><span class="text-bold">Si prefiere nuestros canales remotos, en atención a las medias de prevención del
                    COVID-19</span>, puede consultar por medio de correo electrónico o teléfonos de la oficina dentro de los horarios de <span class="blue bold">09:00 a 13:00</span> horas y las <span class="blue bold">15:00 a 16:30</span> horas, de lunes a viernes.</p><hr />

                <p>Haga click en una de nuestras oficinas y/o centros de atención en el ícono de <i class="fas fa-search text-sm blue bold"></i> para ver más detalles:</p>

                @if ( count($listado) > 0 and count($clasificacion) > 0 )

                    @foreach ( $clasificacion as $c )

                        @if ( count($listado->whereIn('id_unidadclasificacion', [$c->id_unidadclasificacion])) > 0 )

                            <div class="table-responsive mb-5">
                                <table class="table table-bordered table-condensed{{ count($listado->whereIn('id_unidadclasificacion', [$c->id_unidadclasificacion])) > 1 ? " table-striped" : "" }}">

                                    <thead>
                                        <tr class="bg-secondary bold opensans text-center" style="color: white;">
                                            <th class="bold pt-4 pb-4" colspan="5">{{ \Illuminate\Support\Str::upper($c->unidad_clasificacion) }}</th>
                                        </tr>
                                        <tr class="text-center bold">
                                            <th></th>
                                            <th>CIUDAD</th>
                                            <th>CENTRO</th>
                                            <th>CORREO</th>
                                            <th>TELÉFONO</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $listado as $unidad )
                                            @if ( (int) $unidad->id_unidadclasificacion === (int) $c->id_unidadclasificacion)
                                                <tr>
                                                    <td class="align-middle text-center">
                                                        <a href="{{ route('unidad.show', ['unidad' => $unidad->id_unidad]) }}" class="btn btn-sm btn-danger">
                                                            <i class="fas fa-search"></i>
                                                        </a>
                                                    </td>
                                                    <td class="align-middle text-center">{{ $unidad->ciudad }}</td>
                                                    <td class="align-middle">{{ $unidad->nombre_unidad }}</td>
                                                    <td class="align-middle text-center"><a href="mailto:{{ $unidad->correo_unidad }}" class="blue bold">{{ $unidad->correo_unidad }}</a></td>
                                                    <td style="white-space: nowrap;" class="text-center align-middle">

                                                        @if( count($unidad->telefonounid) > 0 )
                                                            <?php $contador = 0; ?>
                                                            @foreach( $unidad->telefonounid as $tel )
                                                                {{ $tel->phoneFormat() }}
                                                                {!!  ( $contador + 1 ) === count($unidad->telefonounid) ? "" : "<br />"  !!}
                                                                <?php $contador++; ?>
                                                            @endforeach
                                                        @endif

                                                    </td>
                                                </tr>
                                            @endif
                                        @endforeach
                                    </tbody>

                                </table>
                            </div>
                        @endif

                    @endforeach

                @else
                    <p>No hay unidades registradas en el sistema.</p>
                @endif

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
