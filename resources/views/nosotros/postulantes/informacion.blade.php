@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Quienes Somos
@endsection

@push('breadcrumbs')
    <li>Quiénes somos</li>
    <li class="sep">/</li>
    <li>Postulantes</li>
@endpush

<?php
    $dreg = \App\Model\Unidad::where('id_tipounidad', \App\Model\TipoUnidad::DIRREG)
        ->with('ciudad', 'usuariocargo', 'telefonounid')
        ->join('region', 'unidad.id_region', '=', 'region.id_region')
        ->orderBy('region.numero_reg', 'asc')
        ->get();
?>


@section('contenido')

{{--    <div class="post mb-4">--}}
{{--        <div class="post-header">--}}
{{--            <h4>Quiénes Somos</h4>--}}
{{--            <h3>Postulantes</h3>--}}
{{--        </div>--}}
{{--        <div class="clearfix"></div>--}}

{{--        <div class="texto">--}}
{{--            <div class="contenido">--}}
{{--                <h4 class="titleborder text-justify text-bold">COMUNICADO DIRIGIDO A FUTUROS Y FUTURAS--}}
{{--                POSTULANTES--}}
{{--                    DE PRÁCTICA PROFESIONAL AL TÍTULO DE ABOGADO/A DE LAS CORPORACIONES DE ASISTENCIA JUDICIAL</h4>--}}
{{--                <p>Se informa que producto de la pandemia de COVID-19, se han tomado medidas extraordinarias, que--}}
{{--                    están consignadas en las Resoluciones 477/2020 y 315/2021, que deben ser revisadas por los interesados en iniciar su práctica profesional.</p>--}}

{{--                <p class="text-center mt-5 pt-5 mb-0 pb-0">--}}
{{--                    <a--}}
{{--                        href="{{ asset('assets/docs/nosotros/postulantes/RESOLUCION_315-2021.pdf') }}"--}}
{{--                        target="_blank" class="opensans blue bold"--}}
{{--                        style="font-size: 18px;"--}}
{{--                    >--}}
{{--                        <i class="far fa-file-pdf fa-2x"></i> &nbsp; Ver Resolución Exenta Nº315-2021--}}
{{--                    </a>--}}
{{--                </p>--}}

{{--                <p class="text-center mt-5 pt-5 mb-0 pb-0">--}}
{{--                    <a--}}
{{--                        href="{{ asset('assets/docs/nosotros/postulantes/RESOLUCION_477-2020.pdf') }}"--}}
{{--                        target="_blank" class="opensans blue bold"--}}
{{--                        style="font-size: 18px;"--}}
{{--                    >--}}
{{--                        <i class="far fa-file-pdf fa-2x"></i> &nbsp; Ver Resolución Exenta Nº477-2020--}}
{{--                    </a>--}}
{{--                </p>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="clearfix"></div>--}}



<div class="post mb-4">
    <div class="post-header">
        <h4>Quiénes Somos</h4>
        <h3>Postulantes</h3>
    </div>
    <div class="clearfix"></div>

    <div class="texto">
        <div class="contenido">

            <h3 class="title">¿Quiénes son?</h3>
            <p>Le corresponde por Ley a las Corporaciones de Asistencia Judicial administrar el sistema de prácticas de los postulantes egresados de la carrera de Derecho. Las Corporaciones - según el decreto 944 de 1981, que establece el estatuto de estas instituciones, determina que éstas tendrán por objeto proporcionar asesoría jurídica y asistencia judicial gratuita a personas vulnerables, y, proporcionar a los egresados de derecho, postulantes a obtener el título de abogados, la práctica necesaria para obtenerlo en conformidad a la Ley</p>

            <div class="texto-separacion"></div>

            <h3 class="title">Fuente Legal</h3>
            <p>El artículo 523 Nº 5 del Código Orgánico de Tribunales establece como uno de los requisitos para obtener el título de abogado, el haber cumplido satisfactoriamente una práctica profesional por 6 meses en las Corporaciones de Asistencia Judicial.</p>
            <p>Los requisitos, formas y condiciones que deban cumplirse para aprobar esta práctica, están determinados en el Decreto Nº 265 de 1985, del Ministerio de Justicia.</p>

            <div class="texto-separacion"></div>

            <h3 class="title">Duración de la Práctica</h3>
            <p>El período de práctica de los postulantes tiene una duración de seis meses, el que comienza con la solicitud del egresado de derecho para efectuar dicha práctica en la unidad que designe la Dirección Regional respectiva conforme a las necesidades y cupos disponibles. Posteriormente y una vez terminado dicho proceso, previa entrega de un Informe de Práctica, se evalúa al postulante, según pautas que para tales efectos existen en la Corporación, conforme al Decreto 265 del año 1985.</p>


            <div class="texto-separacion"></div>



            <h3 class="title">Proceso de Inscripción de Práctica Profesional</h3>
            <p class="pre-ul">Los y las postulantes deberán solicitar su inscripción en la respectiva Dirección Regional correspondiente a la Región donde deseen desarrollar su práctica profesional:</p>

            @if ( count( $dreg ) > 0 )
                <ul class="pl-3">
                    @foreach ( $dreg as $dr )
                        <li>{{ $dr->nombre_unidad }}.</li>
                    @endforeach
                </ul>
            @endif

            <p class="pre-ul">Los y las postulantes al momento de formular su solicitud de inscripción deberán acompañar los siguientes antecedentes:</p>
            <ul class="mt-4">
                <li>Carta dirigida al Director Regional, solicitando realizar su práctica profesional: <a href="{{ asset('assets/docs/nosotros/postulantes/CARTA-SOLICITUD-D_REGIONAL.docx') }}" class="blue opensans"><i class="far fa-file-word"></i> Descargar solicitud.</a></li>
                <li>Certificado de Egreso original.</li>
                <li>Dos fotos tamaño carnet con nombre y RUT</li>
                <li>Fotocopia de cédula de identidad autorizada ante notario.</li>
                <li>
                    En consideración a la entrada en vigencia de la Ley N°20.886 sobre Tramitación Digital de Procedimientos Judiciales, al momento de postular a la práctica, el o la interesado/a deberá:
                    <ul class="pl-4 mb-0">
                        <li>Tener activa la Clave Única que entrega el <a href="https://claveunica.gob.cl" target="_blank" class="blue opensans">Servicio de Registro Civil e Identificación</a> (la obtención de esta clave debe gestionarse personalmente en cualquier oficina del Registro).</li>
                        <li>Dominio de los manuales de usuario dispuestos por la Oficina Judicial Virtual del <a href="https://oficinajudicialvirtual.pjud.cl/manuales_usuario.php" target="_blank" class="blue opensans">Poder Judicial en su sitio web.</a></li>
                    </ul>
                </li>
{{--                    <li><span class="bold">Declaración Jurada SIMPLE</span> para proceso extraordinario de práctica profesional:--}}
{{--                        <a href="{{ asset('assets/docs/nosotros/postulantes/DECLARACION-JURADA-DE-POSTULANTES.pdf') }}" target="_blank"><i class="far fa-file-pdf"></i> Ver documento.</a></li>--}}
            </ul>

            <div class="texto-separacion"></div>

            <h3 class="title">Obligaciones generales de los Postulantes</h3>
            <ul>
                <li>Tramitación judicial diaria de forma y fondo, bajo la supervisión de Abogados(as), en forma presencial y/o electrónica.</li>
                <li>Asistencia al Consultorio, Centro u oficina en el cual este realizando su práctica en días y horas previamente definidas por la Corporación.</li>
                <li>Asistencia a comparendos, audiencias y alegatos, así como a cada una de las actividades en que participe el Consultorio, Centro u oficina en el cual este realizando su práctica.</li>
                <li>Prestar una atención digna y respetuosa al usuario.</li>
                <li>Responsabilidad y compromiso en las causas asignadas.</li>
                <li>Mantención integra, actualizada y en buen estado de cada una de las carpetas y documentos contenidos en ella, tanto en forma material como en forma electrónica en los diversos sistemas de registro de la institución.</li>
                <li>Cumplimiento de instrucciones impartidas por el Abogado Jefe y Abogados, la Dirección Regional y la Dirección General.</li>
                <li>Cumplir con la práctica con ética y buena conducta.</li>
                <li>Y todas las obligaciones que se mencionan en el Decreto Supremo de Justicia 265 del año 1985</li>
            </ul>

            <div class="texto-separacion"></div>

            <h3 class="title">Evaluación de la práctica</h3>
            <p>Los factores de evaluación de la práctica profesional se encuentran establecidos en el artículo 25 del Reglamento de Práctica Profesional, y son:</p>
            <ul>
                <li>Conocimiento Jurídico.</li>
                <li>Criterio Jurídico.</li>
                <li>Responsabilidad.</li>
                <li>Iniciativa.</li>
                <li>Sentido Social.</li>
                <li>Sentido de Colaboración</li>
                <li>Conducta.</li>
                <li>Honorabilidad.</li>
                <li>Asistencia y Puntualidad</li>
            </ul>

            <p>Las prácticas profesionales son evaluadas por el Director Regional de la Corporación de Asistencia Judicial, quien para tales efectos, tendrá a la vista el Informe de Pre-Evaluación emitido por el abogado jefe y abogado tutor del Consultorio jurídico o Centro especializado en que se realizó la práctica profesional,que contiene el detalle de todas las gestiones realizadas por el postulante en las causas que le fueron asignadas durante el período de práctica profesional.</p>
            <p>Dentro del plazo de treinta días hábiles a contar de la fecha del término de la práctica, el postulante deberá hacer entrega de un informe final de la misma al Abogado Jefe, quien certificará este hecho.</p>
            <p>Según el Reglamento, la práctica se debe evaluar como Sobresaliente, Buena, Regular o Mala; en conceptos y sus notas respectivas en: conocimiento teórico, criterio jurídico, responsabilidad, iniciativa, sentido social, sentido de colaboración, conducta, honorabilidad, asistencia y puntualidad.</p>
            <p>Precisar que la práctica calificada como mala en cualquiera de los criterios de evaluación, no será aprobada.</p>

            <div class="texto-separacion"></div>

            <h3 class="title">Interrupción de la práctica</h3>
            <p>La regla general es que esta tiene una duración de seis meses consecutivos e ininterrumpidos, pudiendo admitirse sólo hasta cinco inasistencias justificadas, las que deberán ser compensadas con un día por cada inasistencia y en caso de ser injustificadas, con dos días por cada inasistencia, en ambos casos las compensaciones se deberán realizar al final de la práctica.</p>
            <p>Por otra parte, el artículo 4º del Reglamento de Prácticas Profesionales establece que la práctica profesional sólo podrá suspenderse por fuerza mayor, la que será calificada por el Director de la Corporación.</p>

            <div class="texto-separacion"></div>

            <h3 class="title">Medidas disciplinarias aplicables durante la práctica</h3>
            <p>En cuanto a las medidas disciplinarias son sanciones que se pueden aplicar al postulante por incumplimiento de las obligaciones establecidas en el Reglamento de Práctica Profesional, y por faltas graves durante su desempeño.</p>
            <p>Por lo que el Abogado Jefe dará cuenta inmediata en dicho caso a la Dirección General, generándose un proceso de aplicación de medida disciplinaria, de acuerdo a lo establecido en el Reglamento de Prácticas Profesionales.</p>
            <p>Las medidas disciplinarias que establece el Reglamento son: Amonestación Verbal, Censura por Escrito, Suspensión hasta por 10 días, Prórroga y Cancelación.</p>
            <p>Las medidas disciplinarias sólo pueden ser aplicadas por el Director(a) General, luego de haber procedido con el respectivo procedimiento.</p>

            <div class="texto-separacion"></div>

            <h3 class="title">¿Dónde postular?</h3>
            <p>Las postulaciones se pueden realizar en las siguientes dependencias:</p>

            @if ( count( $dreg ) > 0 )
                @foreach ( $dreg as $dr )
                    <div class="pb-4 mb-3">
                        <h5 class="titleborder bold text-center pre-ul">{{ $dr->nombre_unidad }}</h5>

                        <dl class="dl-horizontal">
                            <dt class="opensans">Dirección: </dt>
                            <dd class="opensans"> {{ $dr->direccion_unidad }}, {{ $dr->ciudad->ciudad }}</dd>

                            <dt class="opensans">Horario de Atención: </dt>
                            <dd class="opensans"> 09:00 a 13:00 y 15:00 a 16:30</dd>
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
                                <dt class="text-bold opensans">{{ count($dr->telefonounid) === 1 ? "Teléfono:" : "Teléfonos:" }}</dt>
                                <?php $contador = 0; ?>
                                <dd class="opensans">
                                    @foreach( $dr->telefonounid as $tel )
                                        {{ $tel->telefono_unid }}
                                        {{ ( $contador + 1 ) === count($dr->telefonounid) ? "" : "-"  }}
                                        <?php $contador++; ?>
                                    @endforeach
                                </dd>
                            @endif

                            <dt class="opensans">Correo Contacto: </dt>
                            <dd class="opensans"> <a class="opensans blue text-bold" href="mailto:{{ $dr->correo_unidad }}">{{ $dr->correo_unidad }}</a></dd>

                            <dt class="opensans">{{ (int) $dr->usuariocargo->id_sexo === (int) \App\Model\Sexo::MASCULINO ? "Director" : "Directora" }} Regional:</dt>
                            <dd class="opensans"> {{ $dr->usuariocargo->getUsername() }}</dd>
                        </dl>
                    </div>
                @endforeach
            @endif


                <div class="texto-separacion"></div>

                <h3 class="title">Solicitud de Duplicado de Certificado de Práctica - Trámite Gratuito</h3>
                <p class="text-justify">Cada Postulante recibe al término de su práctica el certificado original emitido por la Dirección Regional respectiva.</p>
                <p class="text-justify">Este certificado es solo para las personas que no cuentan con el documento original o es muy antiguo y no es aceptado por la Institución donde se presentara.</p>
                <p class="text-justify">Para duplicados de prácticas aprobada antes del año 2018, deben ser solicitados conforme a las instrucciones que se indican en el siguiente link: <a href="{{ route('nosotros.postulantes.solicitud') }}" class="text-bold opensans blue">Formulario de Solicitud de Certificado</a>.</p>

                <div class="texto-separacion"></div>

                <p class="text-bold blue mb-0">PARA DUPLICADO DE CERTIFICADO DE PRÁCTICA APROBADA DESPUES DEL AÑO 2018.</p>
                <p class="text-justify">En estos casos el o la postulante deberá solicitar vía correo electrónico indicando toda la información necesaria para poder emitir certificado, y la emisión del duplicado de certificado de práctica profesional aprobada en la Dirección Regional, de la región donde realizó su práctica profesional:</p>
                <ul class="opensans">
                    <li>RUT</li>
                    <li>Nombre completo</li>
                    <li>Correo electrónico</li>
                    <li>
                        Región donde realizó su práctica profesional
                        <ul>
                            <li>Región de Arica y Parinacota</li>
                            <li>Región de Tarapacá</li>
                            <li>Región de Antofagasta</li>
                        </ul>
                    </li>
                    <li>Lugar o Centro donde realizó la práctica profesional</li>
                    <li>Periodo que hizo la práctica: (mes y año en el que realizó su práctica profesional)</li>
                    <li>Teléfono de contacto</li>
                </ul>
                
                <p class="text-justify">La entrega del documento solicitado se efectuará en un plazo de 10 días hábiles Lunes a jueves de  09.00 a 14.00 horas.</p>
                <p class="text-justify">El retiro del documento es personal, presentando su cédula de identidad, en el caso de que sea retirado por un tercero, debe acompañar fotocopia simple de cédula de identidad con autorización simple del requirente. Se debe dejar copia al momento de retiro.</p>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
