<p>La Corporación de Asistencia Judicial de las regiones de Arica y Parinacota, Tarapacá y Antofagasta certifica que la información ingresada corresponde a un certificado por nuestro servicio, bajo la siguiente información.</p>

<div class="table-responsive mt-3 m-auto">
    <table class="table-borderless table-xs table-condensed w-100">
        <thead>
            <tr>
                <th class="bg-primary center" colspan="3">ANTECEDENTES SOLICITANTE Y SOLICITUD</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="align-middle text-bold text-right">RUT</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ Rut::parse($solicitante->rut_solicitante)->format() }}</td>
            </tr>
            <tr>
                <td class="align-middle text-bold text-right">Nombre completo</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $nombre_solicitante }}</td>
            </tr>
            <tr>
                <td class="align-middle text-bold text-right">Folio documento</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ str_pad($solicitud->folio_documento , 9, '0', STR_PAD_LEFT) }}</td>
            </tr>
            <tr>
                <td class="align-middle text-bold text-right">Código validación</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $solicitud->uuid_validacion_emision }}</td>
            </tr>
            <tr>
                <td class="align-middle text-bold text-right">Fecha emisión documento</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $solicitud->fecha_emision_documento->format('d-m-Y H:i:s') }}</td>
            </tr>
            <tr>
                <td class="align-middle text-bold text-right">Fecha registro entrega</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $solicitud->fecha_cierre_solicitud->format('d-m-Y H:i:s') }}</td>
            </tr>
        </tbody>
    </table>

    <table class="table-borderless table-xs table-condensed w-100 mt-5">
        <thead>
            <tr>
                <th class="bg-primary center" colspan="3">ANTECEDENTES PRÁCTICA</th>
            </tr>
        </thead>
        <tbody>
            @if( !empty( $solicitud->id_unidad ) )
                <tr>
                    <td class="align-middle text-bold text-right">Región</td>
                    <td class="align-middle center mx-0 px-0">:</td>
                    <td class="align-middle">{{ $solicitud->unidad->region->region }}</td>
                </tr>
            @endif
            <tr>
                <td class="align-middle text-bold text-right">Unidad práctica</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ !empty( $solicitud->id_unidad ) ? $solicitud->unidad->nombre_unidad : $solicitud->unidad_externa->unidad_externa }}</td>
            </tr>
            <tr>
                <td class="align-middle text-bold text-right">Periodo de práctica</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">
                    {{ $solicitud->fecha_inicio_practica->format('d-m-Y') }} - {{ $solicitud->fecha_termino_practica->format('d-m-Y') }}
                </td>
            </tr>
            <tr>
                <td class="align-middle text-bold text-right">Resolución práctica</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ str_replace("-", "/", $solicitud->nro_resolucion_solicitud) }}</td>
            </tr>
            <tr>
                <td class="align-middle text-bold text-right">Nota obtenida</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $solicitud->calificacion_practica }} ( {{ $solicitud->calificacion_grado }} )</td>
            </tr>
        </tbody>
    </table>
</div>