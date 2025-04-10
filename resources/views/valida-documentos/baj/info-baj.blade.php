<p>La Corporación de Asistencia Judicial de las regiones de Arica y Parinacota, Tarapacá y Antofagasta certifica que la información ingresada corresponde a un certificado emitido por nuestro servicio, bajo la siguiente información.</p>

<div class="table-responsive mt-3 m-auto">
    <table class="table-borderless table-xs table-condensed w-100 opensans">
        <thead>
            <tr>
                <th class="bg-primary center" colspan="3">ANTECEDENTES GENERALES</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="align-middle text-bold text-right">Folio</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $baj->nrofolio_baj }}</td>
            </tr>
            <tr>
                <td class="align-middle text-bold text-right">Centro</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $baj->unidad->nombre_unidad }}</td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td class="align-middle">{{ $baj->unidad->direccion_unidad }}, {{ $baj->unidad->ciudad->ciudad }}</td>
            </tr>
            <tr>
                <td class="align-middle text-bold text-right">Jefatura quien firma</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $baj->firmabaj->usuario->getUsername() }}</td>
            </tr>
            <tr>
                <td class="align-middle text-bold text-right">Fecha documento</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $baj->created_at->format('d-m-Y H:i:s') }}</td>
            </tr>
        </tbody>
    </table>

    <table class="table-borderless table-xs table-condensed w-100 mt-5 opensans">
        <thead>
            <tr>
                <th class="bg-primary center" colspan="3">ANTECEDENTES DE LA PERSONA</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="align-middle text-bold text-right">{{ $userdata->es_extranjero_baj ? ( empty($userdata->dni_baj) ? "Nº Pasaporte" : "Nº DNI" ) : "RUT" }}</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $doc_identificacion }}</td>
            </tr>
            @if ( $userdata->es_extranjero_baj )
                <tr>
                    <td class="text-muted">Nota: Persona extranjera sin documento de identificación Chilena.</td>
                </tr>
            @endif
            <tr>
                <td class="align-middle text-bold text-right">Nombre completo</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $nombre_completo }}</td>
            </tr>
            @if ( !empty( $nacionalidad ))
                <tr>
                    <td class="align-middle text-bold text-right">Nacionalidad</td>
                    <td class="align-middle center mx-0 px-0">:</td>
                    <td class="align-middle">{{ $nacionalidad }}</td>
                </tr>
            @endif
            <tr>
                <td class="align-middle text-bold text-right">Dirección</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $direccion_usuario }}</td>
            </tr>
        </tbody>
    </table>

    <table class="table-borderless table-xs table-condensed w-100 mt-5 opensans">
        <thead>
            <tr>
                <th class="bg-primary center" colspan="3">ANTECEDENTES DEL DOCUMENTO</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="align-middle text-bold text-right">Tipo Documento</td>
                <td class="align-middle center mx-0 px-0">:</td>
                <td class="align-middle">{{ $baj->tipogestionbaj->baj_tipogestion }}</td>
            </tr>
            @if ( !empty( $baj->rolrit_baj ) and (int) $baj->baj_tipogestion_id === (int) \App\Model\BajTipoGestion::JUDICIAL )
                <tr>
                    <td class="align-middle text-bold text-right">ROL / RIT</td>
                    <td class="align-middle center mx-0 px-0">:</td>
                    <td class="align-middle">{{ $baj->rolrit_baj }}</td>
                </tr>
            @endif
            @if ( !empty( $baj->id_infotribunal ) and (int) $baj->baj_tipogestion_id === (int) \App\Model\BajTipoGestion::JUDICIAL )
                <tr>
                    <td class="align-middle text-bold text-right">Tribunal</td>
                    <td class="align-middle center mx-0 px-0">:</td>
                    <td class="align-middle">{{ $baj->infotribunal->nombre_tribunal }}</td>
                </tr>
            @endif
            @if ( !empty( $baj->id_infocorte ) and (int) $baj->baj_tipogestion_id === (int) \App\Model\BajTipoGestion::JUDICIAL )
                <tr>
                    <td class="align-middle text-bold text-right">Corte</td>
                    <td class="align-middle center mx-0 px-0">:</td>
                    <td class="align-middle">{{ $baj->infocorte->nombre_corte }}</td>
                </tr>
            @endif
            @if ( !empty( $baj->otrodest_baj ) and (int) $baj->baj_tipogestion_id === (int) \App\Model\BajTipoGestion::EXTRAJUDICIAL)
                <tr>
                    <td class="align-middle text-bold text-right">Destino</td>
                    <td class="align-middle center mx-0 px-0">:</td>
                    <td class="align-middle">{{ $baj->otrodest_baj }}</td>
                </tr>
            @endif
            @if ( !empty( $baj->motivo_baj ) )
                <tr>
                    <td class="align-middle text-bold text-right">Motivo</td>
                    <td class="align-middle center mx-0 px-0">:</td>
                    <td class="align-middle">{{ $baj->motivo_baj }}</td>
                </tr>
            @endif
        </tbody>
    </table>
</div>