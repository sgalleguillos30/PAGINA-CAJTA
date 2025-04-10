@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Participación Ciudadana
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('pciudadana.index') }}">Participación Ciudadana</a></li>
    <li class="sep">/</li>
    <li>Consejo de la Sociedad Civil</li>
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

                <h3 class="title">Consejo de la Sociedad Civil (COSOC)</h3>

                <h5 class="bold">¿Qué es un Consejo de la Sociedad Civil?</h5>
                <p>Es un órgano colegiado, de carácter consultivo, compuesto por representantes de las organizaciones sin fines de lucro que se identifiquen con los servicios, políticas, programas o planes ejecutados por nuestra institución.</p><br />

                <h5 class="bold">¿Cuál es el rol como integrante del Consejo de la Sociedad Civil?</h5>
                <p>Aconsejar al servicio con su experiencia, incidir en las políticas públicas de la institución desde una mirada proveniente de la sociedad y sus necesidades.</p><br />


                {{--<h3 class="title">Se parte del Consejo de la Sociedad Civil</h3>
                <img src="{{ asset('assets/media/pciudadana/COSOC/POSTULACION-COSOC.png') }}" alt="" class="img-fluid">

                <div class="pb-5 mb-5">
                    <a
                        href="{{ route('pciudadana.postulacion.cosoc') }}"
                        class="btn btn-danger btn-block text-bold py-5"
                        style="font-size: 24px !important"
                    >
                        Ver más información
                    </a>
                </div>--}}

                <h5 class="bold">Documentación sobre el Consejo de la Sociedad Civil</h5>
                <ul class="opensans">
                    <li><a href="{{ asset('assets/docs/partciudadana/cosoc/general/INTEGRANTES-COSOC.pdf') }}" class="blue opensans" target="_blank">Integrantes</a></li>
                    <li><a href="{{ asset('assets/docs/partciudadana/cosoc/general/ReglamentoSociedadCivil.pdf') }}" class="blue opensans" target="_blank">Reglamento</a></li>
                    <li><a href="{{ asset('assets/docs/partciudadana/cosoc/general/ComisionElectoral_COSOC.pdf') }}" class="blue opensans" target="_blank">Comisión Electoral</a></li>
                    <li><a href="{{ asset('assets/docs/partciudadana/cosoc/general/ResExe_2565-2022.pdf') }}" class="blue opensans" target="_blank">Resolución Exenta 2565-2022: Designa Comisión Electoral, medios de inscripción y votación para el proceso de conformación del COSOC 2023</a></li>
                    <li><a href="{{ asset('assets/docs/partciudadana/cosoc/general/ResExe_247-2023.pdf') }}" class="blue opensans" target="_blank">Resolución Exenta 247-2023: Nombramiento miembros del COSOC de la CAJTA</a></li>
                </ul><br />


                <div class="texto-separacion"></div>
                <h4 class="blue bold opensans center">Miembros del Consejo de la Sociedad Civil</h4><hr />

                <div class="table-responsive mt-5">
                    <table class="table table-stripped table-hover table-bordered">
                        <thead class="bg-secondary" style="color: white;">
                            <tr>
                                <th class="text-center align-middle text-uppercase">Nombre</th>
                                <th class="text-center align-middle text-uppercase">Rol dentro del Consejo</th>
                                <th class="text-center align-middle text-uppercase">Representación</th>
                                <th class="text-center align-middle text-uppercase">Ciudad/Comuna Ubicada</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center text-bold">Elizabeth Rossel Renteria</td>
                                <td class="align-middle text-center">Presidenta</td>
                                <td class="align-middle text-center">Club Adultos Mayores Amigas y Amigos para siempre</td>
                                <td class="align-middle text-center">Arica</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-bold">Edmundo Cáceres Ibáñez</td>
                                <td class="align-middle text-center">Vice Presidente</td>
                                <td class="align-middle text-center">Junta de Vecinos Nº3 de Huara</td>
                                <td class="align-middle text-center">Huara</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-bold">
                                    Jesús Mesías Soto
                                </td>
                                <td class="align-middle text-center">Consejero</td>
                                <td class="align-middle text-center">Consejo Consultivo Ernesto Torres Galdames</td>
                                <td class="align-middle text-center">Iquique</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-bold">Alicia Naranjo Silva</td>
                                <td class="align-middle text-center">Consejera</td>
                                <td class="align-middle text-center">
                                    Centro Cultural de Desarrollo de Salud Videla
                                </td>
                                <td class="align-middle text-center">Iquique</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-bold">
                                    Yoconda Montero Pérez
                                </td>
                                <td class="align-middle text-center">Consejera</td>
                                <td class="align-middle text-center">
                                    Centro Social Cultural Agrupación Nefertiti
                                </td>
                                <td class="align-middle text-center">Iquique</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-bold">
                                    María Inés Miranda Rojas
                                </td>
                                <td class="align-middle text-center">Consejera</td>
                                <td class="align-middle text-center">Unión Comunal del Adulto Mayor Luchando por un Futuro Mejor</td>
                                <td class="align-middle text-center">Iquique</td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-bold">
                                    Rosa González Rivera
                                </td>
                                <td class="align-middle text-center">Consejera</td>
                                <td class="align-middle text-center">Unión Comunal de Alto Hospicio</td>
                                <td class="align-middle text-center">Alto Hospicio</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="texto-separacion"></div>

                <h5 class="bold">Actas de Sesión:</h5>
                <dl class="opensans">
                    <dt><br />Año 2025</dt>
                    <dd></dd>
                    
                    <dt><hr />Año 2024</dt>
                    <dd>[30/12/2024] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2024/Acta_06-2024.pdf') }}" class="blue opensans" target="_blank">Acta Nº6</a></dd>
                    <dd>[22/11/2024] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2024/Acta_05-2024.pdf') }}" class="blue opensans" target="_blank">Acta Nº5</a></dd>
                    <dd>[21/11/2024] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2024/Acta_04-2024.pdf') }}" class="blue opensans" target="_blank">Acta Nº4</a></dd>
                    <dd>[08/08/2024] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2024/Acta_03-2024.pdf') }}" class="blue opensans" target="_blank">Acta Nº3</a></dd>
                    <dd>[06/05/2024] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2024/Acta_02-2024.pdf') }}" class="blue opensans" target="_blank">Acta Nº2</a></dd>
                    <dd>[03/04/2024] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2024/Acta_01-2024.pdf') }}" class="blue opensans" target="_blank">Acta Nº1</a></dd>
                    
                    <dt><hr />Año 2023</dt>
                    <dd>[15/11/2023] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2023/Acta_07-2023.pdf') }}" class="blue opensans" target="_blank">Acta Nº7</a></dd>
                    <dd>[27/10/2023] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2023/Acta_06-2023.pdf') }}" class="blue opensans" target="_blank">Acta Nº6</a></dd>
                    <dd>[06/09/2023] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2023/Acta_05-2023.pdf') }}" class="blue opensans" target="_blank">Acta Nº5</a></dd>
                    <dd>[29/08/2023] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2023/Acta_04-2023.pdf') }}" class="blue opensans" target="_blank">Acta Nº4</a></dd>
                    <dd>[25/05/2023] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2023/Acta_03-2023.pdf') }}" class="blue opensans" target="_blank">Acta Nº3</a></dd>
                    <dd>[02/02/2023] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2023/Acta_02-2023.pdf') }}" class="blue opensans" target="_blank">Acta Nº2</a></dd>
                    <dd>[03/02/2023] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2023/Acta_01-2023.pdf') }}" class="blue opensans" target="_blank">Acta Nº1</a></dd>

                    <dt><hr />Año 2022</dt>
                    <dd>[29/12/2022] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2022/ResExe_2565-2022.pdf') }}" class="blue opensans" target="_blank">Resolución Exenta 2565-2022</a></dd>
                    <dd>[11/10/2022] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2022/Acta_04-2022.pdf') }}" class="blue opensans" target="_blank">Acta Nº4</a></dd>
                    <dd>[22/09/2022] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2022/Acta_03-2022.pdf') }}" class="blue opensans" target="_blank">Acta Nº3</a></dd>
                    <dd>[09/06/2022] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2022/Acta_02-2022.pdf') }}" class="blue opensans" target="_blank">Acta Nº2</a></dd>
                    <dd>[09/05/2022] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2022/Acta_01-2022.pdf') }}" class="blue opensans" target="_blank">Acta Nº1 (Cuenta Pública)</a></dd>

                    <dt><hr />Año 2021</dt>
                    <dd>[06/12/2021] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2021/Acta_05-2021.pdf') }}" class="blue opensans" target="_blank">Acta Nº5</a></dd>
                    <dd>[15/10/2021] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2021/Acta_04-2021.pdf') }}" class="blue opensans" target="_blank">Acta Nº4</a></dd>
                    <dd>[08/10/2021] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2021/Acta_03-2021.pdf') }}" class="blue opensans" target="_blank">Acta Nº3</a></dd>
                    <dd>[07/05/2021] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2021/Acta_02-2021.pdf') }}" class="blue opensans" target="_blank">Acta Nº2 (Cuenta Pública)</a></dd>
                    <dd>[28/04/2021] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2021/Acta_01-2021.pdf') }}" class="blue opensans" target="_blank">Acta Nº1</a></dd>

                    <dt><hr />Año 2020</dt>
                    <dd>[01/12/2020] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2020/Acta_04-2020.pdf') }}" class="blue opensans" target="_blank">Acta Nº4</a></dd>
                    <dd>[21/10/2020] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2020/Acta_03-2020.pdf') }}" class="blue opensans" target="_blank">Acta Nº3</a></dd>
                    <dd>[19/05/2020] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2020/Acta_02-2020.pdf') }}" class="blue opensans" target="_blank">Acta Nº2</a></dd>
                    <dd>[08/01/2020] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2020/Acta_01-2020.pdf') }}" class="blue opensans" target="_blank">Acta Nº1</a></dd>

                    <dt><hr />Año 2019</dt>
                    <dd>[29/10/2019] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2019/Acta_06-2019.pdf') }}" class="blue opensans" target="_blank">Acta Nº6</a></dd>
                    <dd>[02/09/2019] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2019/Acta_05-2019.pdf') }}" class="blue opensans" target="_blank">Acta Nº5</a></dd>
                    <dd>[29/07/2019] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2019/Acta_04-2019.pdf') }}" class="blue opensans" target="_blank">Acta Nº4</a></dd>
                    <dd>[11/07/2019] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2019/Acta_03-2019.pdf') }}" class="blue opensans" target="_blank">Acta Nº3</a></dd>
                    <dd>[01/07/2019] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2019/Acta_02-2019.pdf') }}" class="blue opensans" target="_blank">Acta Nº2</a></dd>
                    <dd>[14/05/2019] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2019/Acta_01-2019.pdf') }}" class="blue opensans" target="_blank">Acta Nº1</a></dd>
                    <dd>[15/05/2019] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2019/ACTA-CPP-2018-COSOC.pdf') }}" class="blue opensans" target="_blank">Acta - Cuenta Pública Participativa 2018.</a></dd>

                    <dt><hr />Año 2018</dt>
                    <dd>[28/02/2018] <a target="_blank" href="{{ asset('assets/docs/partciudadana/cosoc/actas-2018/Acta_01-2018.pdf') }}" class="blue opensans">Acta Nº1.</a></dd>
                    <dd>[14/05/2018] <a target="_blank" href="{{ asset('assets/docs/partciudadana/cosoc/actas-2018/ACTA-CPP-2017-CSC.pdf') }}" class="blue opensans">Acta, Cuenta Pública Participativa 2017.</a></dd>

                    <dt><hr />Año 2017</dt>
                    <dd>[30/06/2017] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2017/Acta_01-2017.pdf') }}" class="blue opensans" target="_blank">Acta Nº1</a></dd>
                    <dd>[08/09/2017] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2017/Acta_02-2017.pdf') }}" class="blue opensans" target="_blank">Acta Nº2</a></dd>
                    <dd>[16/11/2017] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2017/Acta_03-2017.pdf') }}" class="blue opensans" target="_blank">Acta Nº3</a></dd>
                    <dd>[28/12/2017] <a href="{{ asset('assets/docs/partciudadana/cosoc/actas-2017/Acta_04-2017.pdf') }}" class="blue opensans" target="_blank">Acta Nº4</a></dd>
                </dl>

                @include('pciudadana.layouts.otros-links')

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
