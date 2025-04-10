@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Quienes Somos
@endsection

@push('breadcrumbs')
    <li>Quiénes somos</li>
    <li class="sep">/</li>
    <li>Consejo Directivo</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Quiénes Somos</h4>
            <h3>Consejo Directivo</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                {{--<h3 class="title">¿Quiénes son?</h3>--}}
                {{--<img src="{{ asset('assets/images/Consejo/CONSEJO.jpg') }}" alt="Consejo Directivo CAJTA" class="aligncenter mb-5" style="max-height: 450px;">--}}

                <p class="text-justify">Este es el Órgano colegiado que dirige la Institución, integrado por 6 miembros Ad Honorem, conforme a sus Estatutos consignados en el Decreto con Fuerza de Ley 1-18632, publicación en el año 1988, que señala en su Titulo II:</p>

                <p class="italic text-justify">“Del Consejo Directivo
                    Artículo 6°: La Corporación será dirigida por un Consejo Directivo compuesto de seis miembros, que estará integrado por las siguientes personas:<br />
                    a) El Secretario Regional Ministerial de Justicia de la Región de Tarapacá.<br />
                    b) El Secretario Regional Ministerial de Justicia de la Región de Antofagasta.<br />
                    c) Un representante de las Municipalidades de la Primera Región de Tarapacá que hayan celebrado convenios de asistencia judicial con la Corporación;<br />
                    d) Un representante de las Municipalidades de la Segunda Región de Antofagasta, que hayan celebrado convenios de asistencia judicial con la Corporación, y <br />
                    e) Dos abogados de libre ejercicio de la profesión, designados por el Ministerio de Justicia a través de su División Judicial y que tengan su domicilio en la jurisdicción de la Corporación.”</p>

                <div class="texto-separacion"></div>
                <h4 class="blue bold opensans center">Consejo Directivo CAJTA</h4><hr />


                <div class="table-responsive mt-5">
                    <table class="table table-stripped table-hover table-bordered">
                        <thead class="bg-secondary" style="color: white;">
                            <tr>
                                <th class="text-center align-middle text-uppercase">Nombre</th>
                                <th class="text-center align-middle text-uppercase">Rol dentro del Consejo</th>
                                <th class="text-center align-middle text-uppercase">Calidad en virtud de la cual forma parte del Consejo</th>
                                <th class="text-center align-middle text-uppercase">Fecha de designación</th>
                                <th class="text-center align-middle text-uppercase">Fuente de su designación</th>
                                <th class="text-center align-middle text-uppercase">Fecha de expiración en el cargo</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center"><strong>Pablo Horacio Valenzuela Ramírez</strong> (Abogado)</td>
                                <td class="align-middle text-center">Presidente</td>
                                <td class="align-middle text-center">SEREMI de Justicia y Derechos Humanos, Región de Tarapacá</td>
                                <td class="align-middle text-center">26-08-2023</td>
                                <td class="align-middle text-center">Decreto Supremo Nº 084-2023</td>
                                <td class="align-middle text-center">Indefinido mientras esté en el cargo</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center"><strong>Trissy Mila Figueroa Rivera</strong> (Abogada)</td>
                                <td class="align-middle text-center">Vice Presidenta</td>
                                <td class="align-middle text-center">SEREMI de Justicia y Derechos Humanos, Región de Antofagasta</td>
                                <td class="align-middle text-center">13-11-2023</td>
                                <td class="align-middle text-center">Decreto Supremo Nº 122-2023</td>
                                <td class="align-middle text-center">Indefinido mientras esté en el cargo</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center">
                                    <strong>Norma Cristina Córdova Correa</strong> (Abogada Ilustre Municipalidad de Alto Hospicio)
                                </td>
                                <td class="align-middle text-center">Consejera</td>
                                <td class="align-middle text-center">
                                    Representante Ilustre Municipalidad de Alto Hospicio, Región de Tarapacá. Convenio con CAJTA.
                                </td>
                                <td class="align-middle text-center">22-02-2024 (Presidente Consejo)</td>
                                <td class="align-middle text-center">Resolución Exenta Nº 026-2024</td>
                                <td class="align-middle text-center">Indefinido con Convenio Vigente</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center">
                                    <strong>Jéssica Andrea Muñoz Vega</strong> (Abogada Ilustre Municipalidad de Taltal)
                                </td>
                                <td class="align-middle text-center">Consejera</td>
                                <td class="align-middle text-center">
                                    Representante Ilustre Municipalidad de Taltal, Región de Antofagasta. Convenio con CAJTA.
                                </td>
                                <td class="align-middle text-center">04-04-2024 (Presidente Consejo)</td>
                                <td class="align-middle text-center">Resolución Exenta Nº 056-2024</td>
                                <td class="align-middle text-center">Indefinido con Convenio Vigente</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center">
                                    <strong>Flavio Isaac Quezada Rodríguez</strong> (Abogado Representante Ministerio Justicia y Derechos Humanos)
                                </td>
                                <td class="align-middle text-center">Consejero</td>
                                <td class="align-middle text-center">Abogado libre ejercicio</td>
                                <td class="align-middle text-center">20-10-2023 (Ministerio de Justicia y Derechos Humanos)</td>
                                <td class="align-middle text-center">Resolución Exenta Nº 2383-2023</td>
                                <td class="align-middle text-center">2 años <br />(21-10-2025)</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center">
                                    <strong>Sandra Consuelo Gil Bessolo</strong> (Abogada Representante Ministerio Justicia y Derechos Humanos)
                                </td>
                                <td class="align-middle text-center">Consejera</td>
                                <td class="align-middle text-center">Abogada libre ejercicio</td>
                                <td class="align-middle text-center">20-10-2023 (Ministerio de Justicia y Derechos Humanos)</td>
                                <td class="align-middle text-center">Resolución Exenta Nº 2383-2023</td>
                                <td class="align-middle text-center">2 años <br />(21-10-2025)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                


                <div class="texto-separacion"></div>

                <p>Consejo Directivo nombra como Secretario de Actas y Participación sin derecho a voto:</p>

                <div class="table-responsive">
                    <table class="table table-stripped table-hover table-bordered">
                        <thead class="bg-secondary" style="color: white;">
                            <th class="text-center align-middle text-uppercase">Nombre</th>
                            <th class="text-center align-middle text-uppercase">Rol dentro del Consejo</th>
                            <th class="text-center align-middle text-uppercase">Calidad en virtud de la cual forma parte del Consejo</th>
                            <th class="text-center align-middle text-uppercase">Fecha de designación</th>
                            <th class="text-center align-middle text-uppercase">Fuente de su designación</th>
                            <th class="text-center align-middle text-uppercase">Fecha de expiración en el cargo</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center"><strong>Camila Beatriz Rivera Tapia</strong> (Abogada)</td>
                                <td class="align-middle text-center">Secretaria</td>
                                <td class="align-middle text-center">SEREMI de Justicia y Derechos Humanos, Región de Arica y Parinacota</td>
                                <td class="align-middle text-center">25-04-2022</td>
                                <td class="align-middle text-center">Decreto Supremo Nº051-2022</td>
                                <td class="align-middle text-center">Indefinido mientras esté en cargo</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
