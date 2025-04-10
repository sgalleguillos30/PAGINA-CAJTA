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

                <div class="table-responsive">
                    <table class="table table-stripped table-hover table-bordered">
                        <thead class="bg-secondary" style="color: white; vertical-align: middle;">
                            <th class="center" style="vertical-align: middle;">Nombre</th>
                            <th class="center" style="vertical-align: middle;">Rol dentro del Consejo</th>
                            <th class="center" style="vertical-align: middle;">Calidad en virtud de la cual forma parte del Consejo</th>
                            <th class="center" style="vertical-align: middle;">Fecha de designación</th>
                            <th class="center" style="vertical-align: middle;">Fuente de su designación</th>
                            <th class="center" style="vertical-align: middle;">Fecha de expiración en el cargo</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>Camila Castillo Guerrero</strong> <small>(Abogada)</small></td>
                                <td>Presidenta</td>
                                <td>SEREMI de Justicia y Derechos Humanos, Región de Tarapacá</td>
                                <td>25-04-2022</td>
                                <td>Decreto Nº050 Ministerio de Justicia y Derechos Humanos</td>
                                <td>Término del cargo</td>
                            </tr>

                            <tr>
                                <td><strong>Cristobal Orellana Osorio</strong> <small>(Abogado)</small></td>
                                <td>Vice Presidente</td>
                                <td>SEREMI de Justicia y Derechos Humanos, Región de Antofagasta</td>
                                <td>25-04-2022</td>
                                <td>Decreto Nº051 Ministerio de Justicia y Derechos Humanos</td>
                                <td>Término del cargo</td>
                                {{--<td>Decreto Nº389 Ministerio de Justicia y Derechos Humanos</td>--}}
                                {{--<td>Término del cargo</td>--}}
                            </tr>

                            <tr>
                                <td><strong>Luis Clemente Cerda Pérez</strong> {{-- <small>(Abogada I.M. de Pozo Almonte)</small> --}}</td>
                                <td>Consejero</td>
                                <td>Representante del Ministerio de Justicia y Derechos Humanos</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                {{--<td>Decreto Alcaldicio Nº429 (30-01-2018) Re. Ex. SEREMI Tarapacá Nº24/2018</td>--}}
                                {{--<td>Indefinido Convenio con Municipalidad Vigente</td>--}}
                            </tr>

                            <tr>
                                <td><strong>Edwin Riffo González</strong> {{-- <small>(Abogado I.M. de Calama)</small> --}}</td>
                                <td>Consejero</td>
                                <td>Representante del Ministerio de Justicia y Derechos Humanos</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                {{--<td>Decreto Alcaldicio Nº412 (05-04-2016) Re. Ex. SEREMI Tarapacá Nº67/2016</td>--}}
                                {{--<td>Indefinido Convenio con Municipalidad Vigente</td>--}}
                            </tr>

                            <tr>
                                <td><strong>Marta Collao Canto</strong> <small>(Abogada)</small></td>
                                <td>Consejera</td>
                                <td>Representante de la Ilustre Municipalidad de Taltal</td>
                                <td>13-05-2022</td>
                                <td>Resolución Exenta Nº077-2022 Seremi Justicia y Derechos Humanos, Región de Tarapacá</td>
                                <td></td>
                                {{--<td>Res. Ex. Nº4.850/2016 del Ministerio de Justicia y Derechos Humanos</td>--}}
                                {{--<td>12-12-2018</td>--}}
                            </tr>

                        </tbody>
                    </table>
                </div>


                <div class="texto-separacion"></div>

                <p>Consejo Directivo nombra como Secretario de Actas y Participación sin derecho a voto:</p>

                <div class="table-responsive">
                    <table class="table table-stripped table-hover table-bordered">
                        <thead class="bg-secondary" style="color: white; vertical-align: middle;">
                        <th class="center" style="vertical-align: middle;">Nombre</th>
                        <th class="center" style="vertical-align: middle;">Rol dentro del Consejo</th>
                        <th class="center" style="vertical-align: middle;">Calidad en virtud de la cual forma parte del Consejo</th>
                        <th class="center" style="vertical-align: middle;">Fecha de designación</th>
                        <th class="center" style="vertical-align: middle;">Fuente de su designación</th>
                        <th class="center" style="vertical-align: middle;">Fecha de expiración en el cargo</th>
                        </thead>
                        <tbody>
                        <tr>
                            <td><strong>Camila Rivera Tapia</strong></td>
                            <td>Secretaria de Actas</td>
                            <td>SEREMI de Justicia y Derechos Humanos, Región de Arica y Parinacota</td>
                            <td>29-04-2022</td>
                            <td>Decreto Nº054 Ministerio de Justicia y Derechos Humanos</td>
                            <td>Término del cargo</td>
                        </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
