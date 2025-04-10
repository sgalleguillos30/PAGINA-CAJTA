@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Quienes Somos
@endsection

@push('breadcrumbs')
    <li>Quiénes somos</li>
    <li class="sep">/</li>
    <li>Postulantes</li>
    <li class="sep">/</li>
    <li>Solicitud</li>
@endpush



@section('contenido')

    <div class="post mb-4">
        <div class="post-header">
            <h4>Quiénes Somos</h4>
            <h3>Postulantes</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title">Solicitud de Certificado Práctica Profesional<br /> Estudiantes de Derecho</h3>

                <p class="text-justify">Respecto de los certificados originales emitidos antes del año 2018, debe completar el siguiente formulario. <span class="text-bold">(Los con posterioridad al 2018 deben ser solicitados directamente en la Direcciones Regionales respectivas)</span>.</p>
                <p class="text-justify">Para ello deberá completar el siguiente formulario, el plazo de entrega en Tarapacá donde se emiten es de 10 días hábiles y en las demás regiones 15 días hábiles, ya que deben ser despachos a las oficinas de la Dirección Regional respectiva, de Lunes a jueves  09.00 a 14.00 horas.
                </p>
                <p class="text-justify">El retiro del documento es personal, presentando su cédula de identidad, en el caso de que sea retirado por un tercero, debe acompañar fotocopia simple de cédula de identidad con autorización simple del requirente. Se debe dejar copia al momento de la entrega.</p>

                <p class="text-bold">DATOS POR REGIÓN PARA RETIRO:</p>

                <div class="table-responsive">
                    <table class="table table-bordered opensans">
                        <thead class="bg-primary text-white">
                            <tr class="text-center">
                                <th>REGIÓN</th>
                                <th>DATOS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center text-bold">ARICA Y PARINACOTA</td>
                                <td class="pb-0">
                                    <ul class="list-unstyled pb-0 mb-0">
                                        <li><span class="text-bold">Dirección:</span> Adrián Zúñiga 812, Arica</li>
                                        <li><span class="text-bold">Correo:</span> <a class="text-bold" href="mailto:direccionreg.arica@cajta.cl">direccionreg.arica@cajta.cl</a></li>
                                        <li>
                                            <span class="text-bold">Teléfonos: </span>
                                            <ul class="list-unstyled mb-2 pb-2">
                                                <li>582 594 511</li>
                                                <li>582 594 639</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-bold">TARAPACÁ</td>
                                <td class="pb-0">
                                    <ul class="list-unstyled pb-0 mb-0">
                                        <li><span class="text-bold">Dirección:</span> Calle Plaza Prat 570, Iquique</li>
                                        <li><span class="text-bold">Correo:</span> <a class="text-bold" href="mailto:dirgen@cajta.cl">dirgen@cajta.cl</a></li>
                                        <li>
                                            <span class="text-bold">Teléfonos: </span>
                                            <ul class="list-unstyled mb-2 pb-2">
                                                <li>572 532 160</li>
                                                <li>572 532 162</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-bold">ANTOFAGASTA</td>
                                <td class="pb-0">
                                    <ul class="list-unstyled pb-2 mb-2">
                                        <li><span class="text-bold">Dirección:</span> Av. Grecia 2032, Piso 3, Antofagasta</li>
                                        <li><span class="text-bold">Correo:</span> <a class="text-bold" href="mailto:direccionreg.antofagasta@cajta.cl">direccionreg.antofagasta@cajta.cl</a></li>
                                        <li><span class="text-bold">Teléfono: </span> 552 590 702</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="texto-separacion"></div>

                <p>Completa el siguiente formulario para solicitar tu certificado.</p>

                <div class="embed-responsive" style="height: 2000px">
                    <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSf_LvqzIbvF-r7f3lTRC6mqYOBSufk_z0T88HK0nDFohx1yeQ/viewform?embedded=true" width="620" height="1429" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
                </div>

                

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
