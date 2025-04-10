@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Participación Ciudadana
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('pciudadana.index') }}">Participación Ciudadana</a></li>
    <li class="sep">/</li>
    <li><a href="{{ route('pciudadana.cosoc') }}">Consejo de la Sociedad Civil</a></li>
    <li class="sep">/</li>
    <li>Postulación COSOC</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Participación Ciudadana</h4>
            <h3>Consejo de la Sociedad Civil </h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title">Se parte del Consejo de la Sociedad Civil (COSOC)</h3>

                <h5 class="bold">Inscripción</h5>
                <p>Para postularse como integrante del Consejo de la Sociedad Civil, las organizaciones sin fines de lucro deberán llenar el formulario para la postulación en línea o el formulario descargable para la postulación presencial.</p>
                <p class="mb-0 pb-0">Esta postulación requiere los siguientes antecedentes:</p>
                <ul class="opensans ml-2">
                    <li>Certificado de Vigencia de Personalidad Jurídica.</li>
                    <li>Estatutos de la Asociación Sin Fines de Lucro</li>
                </ul>

                <p>Las candidaturas serán inscritas por algún miembro facultado de la asociación sin fines de lucro.</p>
                <p>Cada organización debidamente acreditada para participar en el proceso eleccionario tendrá derecho a presentar un candidato.</p>
                <p>Cualquier vicio o deficiencia en la acreditación afectará de igual forma a la inscripción de la candidatura.</p>
                <p class="mb-0 pb-0">Se exigirá la presentación de los siguientes antecedentes:</p>
                <ul class="opensans ml-2">
                    <li>Identificación de la organización (nombre y tipo, teléfono, dirección y correo electrónico).</li>
                    <li>Nombre de Postulante, Rut, cargo, teléfono, correo electrónico (candidato/a).</li>
                </ul><br />


                <h3 class="title">Cronograma del proceso</h3>

                <div class="table-responsive">
                    <table class="table table-bordered table-sm">
                        <thead class="text-center bg-secondary text-white">
                            <tr>
                                <th>Proceso</th>
                                <th>Fecha inicio</th>
                                <th>Fecha término</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Inicio y fin de proceso de elecciones</td>
                                <td class="text-center">30 diciembre 2022</td>
                                <td class="text-center">19 enero 2023</td>
                            </tr>
                            <tr>
                                <td>Evaluación de las postulaciones</td>
                                <td class="text-center">20 enero 2023</td>
                                <td class="text-center">02 febrero 2023</td>
                            </tr>
                            <tr>
                                <td>Publicación de los resultados</td>
                                <td class="text-center">03 febrero 2023</td>
                                <td class="text-center">09 febrero 2023</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <p>&nbsp;</p>

                <h3 class="title">Postulación en línea</h3>
                <p>Complete el siguiente formulario para postularse como integrante del Consejo de la Sociedad Civil.</p>
                <div class="mb-5 pb-5">
                    <a
                        href="https://forms.gle/PxXmjnjRZYkbEAmt8"
                        class="btn btn-danger btn-lg px-4 py-4 btn-block text-bold"
                        style="font-size: 18px !important;"
                        target="_blank"
                    >
                        Postula en línea aquí
                    </a>
                </div>
                <br />


                <h3 class="title">Postulación presencial</h3>
                <p>Para postular como integrante del Consejo de la Sociedad Civil (COSOC) o para participar votando en la elección, descargue el siguiente formulario en formato word y complete todos los campos.</p>

                <p class="text-center mt-5 mb-5 pb-0">
                    <a
                        href="{{ asset('assets/docs/partciudadana/cosoc/POSTULACION-COSOC.docx') }}"
                        class="opensans blue bold"
                        style="font-size: 18px;"
                    >
                        <i class="far fa-file-word fa-2x"></i> &nbsp; Descargar documento de postulación
                    </a>
                </p>

                <p class="mb-0 pb-0">Además, deberá incluir la siguiente documentación:</p>
                <ul class="opensans ml-2">
                    <li>Certificado de Vigencia de Personalidad Jurídica.</li>
                    <li>Estatutos de la Asociación Sin Fines de Lucro</li>
                </ul>

                <p class="mb-0 pb-0">Para la entrega del documento de postulación, mas la documentación, se deberá realizar en las siguientes oficinas según su Región de residencia:</p>
                <ul class="opensans ml-2">
                    <li><span class="text-bold">Arica:</span> Adrián Zúñiga 812</li>
                    <li><span class="text-bold">Iquique:</span> Calle Plaza Prat 570</li>
                    <li><span class="text-bold">Antofagasta:</span> Av. Grecia 2032, Piso 3</li>
                </ul>



                @include('pciudadana.layouts.otros-links')

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
