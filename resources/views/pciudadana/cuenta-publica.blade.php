@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Participación Ciudadana
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('pciudadana.index') }}">Participación Ciudadana</a></li>
    <li class="sep">/</li>
    <li>Cuentas Públicas Participativas</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Participación Ciudadana</h4>
            <h3>Cuentas Públicas Participativas</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title">Cuentas Públicas Participativas (CPP)</h3>

                <h5 class="bold">¿Qué es la Cuenta Pública Participativa (CPP)?</h5>
                <p>Las Cuentas Públicas Participativas son espacios de diálogo abierto entre la autoridad pública, los representantes de la sociedad civil y la ciudadanía, que permiten a la autoridad pública rendir cuenta anual de la gestión de políticas públicas, permitiendo a los ciudadanos ejercer el control social sobre la gestión de la administración pública.</p><br />



                <h5 class="bold">Cuenta Pública Gestión 2023.</h5><br /><br />

                <dl>
                    <dt>Informes</dt>
                    <dd>
                        <ul>
                            {{--<li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cosoc/actas-2022/Acta_01-2022.pdf') }}">Acta de reunión, Consejo de la Sociedad Civil.</a></li>--}}
                            {{--<li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2022/CAJTA-CPP-2022_BORRADOR.pdf') }}">BORRADOR - Documento de rendición de Cuenta Pública Gestión año 2022.</a></li>--}}
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2023/CAJTA-CPP-2023.pdf') }}">Documento de rendición de Cuenta Pública Gestión año 2023.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2023/INFORME-FINAL-CPP-2023.pdf') }}">Informe Cuenta Pública Participativa 2023.</a></li>
                        </ul>
                    </dd>

                    <dt>Redes Sociales</dt>
                    <dd>
                        <ul>
                            <li><span class="bold">[Facebook]</span> <a href="https://www.facebook.com/watch/?v=440451445292389/" target="_blank">Ver Cuenta Pública Participativa CAJTA, Gestión 2023</a></li>
                            <li><a href="https://www.facebook.com/CAJTA/posts/pfbid025E2gq32GZaWyGetzqYeSSt7u79ATu4BEuuowUcgKNdaBji8oC8xPbAf1R7jMS8G2l" target="_blank">Invitación Cuenta Pública en Facebook</a></li>
                            <li><a href="https://www.instagram.com/p/C7Wuib0OWce/?igsh=cG53eGp1OHh0aHg1" target="_blank">Invitación Cuenta Pública en Instagram</a></li>
                            <li><a href="https://x.com/cajta_oficial/status/1794017531952349387?s=46&t=slPRqb35jR0p7SWHcmuvJQ" target="_blank">Invitación Cuenta Pública en Twitter</a></li>
                        </ul>
                    </dd>
                </dl>
                
                {{-- @include('pciudadana.form.consulta_cpp') --}}


                <div class="texto-separacion"></div><hr /><br />


                <h5 class="bold">Cuenta Pública Gestión 2022.</h5>

                <dl>
                    <dt>Informes</dt>
                    <dd>
                        <ul>
                            {{--<li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cosoc/actas-2022/Acta_01-2022.pdf') }}">Acta de reunión, Consejo de la Sociedad Civil.</a></li>--}}
                            {{--<li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2022/CAJTA-CPP-2022_BORRADOR.pdf') }}">BORRADOR - Documento de rendición de Cuenta Pública Gestión año 2022.</a></li>--}}
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2022/CAJTA-CPP-2022.pdf') }}">Documento de rendición de Cuenta Pública Gestión año 2022.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2022/INFORME-FINAL-CPP-2022.pdf') }}">Informe Cuenta Pública Participativa 2022.</a></li>
                        </ul>
                    </dd>

                    <dt>Redes Sociales</dt>
                    <dd>
                        <ul>
                            {{--<li><span class="bold">[Facebook]</span> <a href="https://www.facebook.com/CAJTA/videos/585018606324481/" target="_blank">Ver Cuenta Pública Participativa CAJTA, Gestión 2021</a></li>--}}
                            <li><span class="bold">[YouTube]</span> <a href="https://youtu.be/NZ4yyoGIv4s" target="_blank">Ver Cuenta Pública Participativa CAJTA, Gestión 2022</a></li>
                            <li><a href="https://web.facebook.com/photo.php?fbid=631138072385920&set=pb.100064691979158.-2207520000.&type=3" target="_blank">Invitación Cuenta Pública en Facebook</a></li>
                            <li><a href="https://www.instagram.com/p/Cr1Q0_wuDfr/?igshid=MzRlODBiNWFlZA==" target="_blank">Invitación Cuenta Pública en Instagram</a></li>
                            <li><a href="https://twitter.com/CAJTA_oficial/status/1654199398841106432?s=20" target="_blank">Invitación Cuenta Pública en Twitter</a></li>
                        </ul>
                    </dd>
                </dl>

                <dl>
                    <dt>Calendario de actividades</dt>
                </dl>

                <div class="table-responsive">
                    <table class="table table-stripped table-hover table-bordered">
                        <thead class="bg-primary">
                            <tr>
                                <th class="center">FECHA</th>
                                <th class="center">HITO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-justify">
                                <td class="align-middle"><strong>Jueves 04 de mayo 2023</strong></td>
                                <td class="align-middle">Difusión de convocatoria de Cuenta Pública  Participativa</td>
                            </tr>

                            <tr class="text-justify">
                                <td class="align-middle"><strong>Viernes 12 de mayo 2023</strong></td>
                                <td>
                                    <ul class="list-unstyled pl-0 ml-0 pb-0 mb-0">
                                        <li class="lista-tabla">Publicación del documento de rendición de Cuenta Pública Participativa y envío a Consejo de la Sociedad Civil para apreciaciones u observaciones</li><hr />
                                        <li class="lista-tabla">Inicio de Participación Virtual Ciudadana de la Cuenta Pública. (Finalización 25 de mayo de 2023)</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr>
                                <td class="align-middle"><strong>Viernes 05 de mayo al lunes 15 de mayo 2022</strong></td>
                                <td class="align-middle">Actividad de Cuenta Pública Participativa con mesas de trabajo</td>
                            </tr>

                            <tr>
                                <td class="align-middle"><strong>Jueves 18 de mayo 2022</strong></td>
                                <td class="align-middle">Aprobación del Consejo de la Sociedad Civil del documento de rendición de Cuenta Pública Participativa.</td>
                            </tr>

                            <tr>
                                <td class="align-middle"><strong>Jueves 25 de mayo 2023</strong></td>
                                <td class="align-middle">Cuenta Pública Participativa</td>
                            </tr>

                            <tr class="text-justify">
                                <td class="align-middle"><strong>Martes 01 de agosto 2023</strong></td>
                                <td>
                                    <ul class="list-unstyled pl-0 ml-0 pb-0 mb-0">
                                        <li class="lista-tabla">Término de la participación virtual ciudadana de la Cuenta Pública Participativa</li><hr />
                                        <li class="lista-tabla">Publicación Informe Final del Mecanismo de Participación Ciudadana / Resumen de mesas de trabajo correspondiente </li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="texto-separacion"></div><hr /><br />


                <h5 class="bold">Cuenta Pública Gestión 2021.</h5>

                <dl>
                    <dt>Informes</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cosoc/actas-2022/Acta_01-2022.pdf') }}">Acta de reunión, Consejo de la Sociedad Civil.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2021/CAJTA-CPP-2021.pdf') }}">Documento de rendición de Cuenta Pública Gestión año 2021.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2021/INFORME-FINAL-CPP-2021.pdf') }}">Informe Cuenta Pública Participativa 2021.</a></li>
                        </ul>
                    </dd>

                    <dt>Redes Sociales</dt>
                        <dd>
                            <ul>
                                <li><span class="bold">[Facebook]</span> <a href="https://www.facebook.com/CAJTA/videos/585018606324481/" target="_blank">Ver Cuenta Pública Participativa CAJTA, Gestión 2021</a></li>
                                <li><span class="bold">[YouTube]</span> <a href="https://youtu.be/6TQMTppRI-c" target="_blank">Ver Cuenta Pública Participativa CAJTA, Gestión 2021</a></li>
                                <li><a href="https://www.facebook.com/photo/?fbid=380797794086617&set=a.309725657860498" target="_blank">Invitación Cuenta Pública en Facebook</a></li>
{{--                            <li><a href="https://www.instagram.com/p/CO8u6syLUxd/" target="_blank">Invitación Cuenta Pública en Instagram</a></li>--}}
{{--                            <li><a href="https://twitter.com/CAJTA_oficial/status/1394047397748170753?s=20" target="_blank">Invitación Cuenta Pública en Twitter</a></li>--}}
                            </ul>
                        </dd>
                </dl>

                <dl>
                    <dt>Calendario de actividades</dt>
                </dl>

                <div class="table-responsive">
                    <table class="table table-stripped table-hover table-bordered">
                        <thead class="bg-primary">
                            <tr>
                                <th class="center">FECHA</th>
                                <th class="center">HITO</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="text-justify">
                                <td class="align-middle"><strong>Lunes 09 de mayo 2022</strong></td>
                                <td class="align-middle">Aprobación del Consejo de la Sociedad Civil del documento de rendición de Cuenta Pública Participativa.</td>
                            </tr>

                            <tr>
                                <td class="align-middle"><strong>Viernes 20 de mayo 2022</strong></td>
                                <td class="align-middle">Publicación del documento de rendición de Cuenta Pública Participativa.</td>
                            </tr>

                            <tr class="text-justify">
                                <td class="align-middle"><strong>Viernes 27 de mayo 2022</strong></td>
                                <td>
                                    <ul class="list-unstyled pl-0 ml-0 pb-0 mb-0">
                                        <li class="lista-tabla">Cuenta Pública Participativa presencial.</li><hr />
                                        <li class="lista-tabla">Inicio de Participación Virtual Ciudadana de la Cuenta Pública.</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="text-justify">
                                <td class="align-middle"><strong>Martes 02 de agosto 2022</strong></td>
                                <td class="align-middle">
                                    <ul class="list-unstyled pl-0 ml-0 pb-0 mb-0">
                                        <li class="lista-tabla">Término de la participación virtual ciudadana de la Cuenta Pública Participativa.</li><hr />
                                        <li class="lista-tabla">Publicación Informe Final del Mecanismo de Participación Ciudadana.</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                {{-- @include('pciudadana.form.consulta_cpp') --}}


                <div class="texto-separacion"></div><hr /><br />


                <h5 class="bold">Cuenta Pública Gestión 2020.</h5>

                <dl>
                    <dt>Informes</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cosoc/actas-2021/Acta_02-2021.pdf') }}">Acta de reunión, Consejo de la Sociedad Civil.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2020/CAJTA-CPP-2020.pdf') }}">Documento de rendición de Cuenta Pública Gestión año 2020.</a></li>
                            {{-- <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2019/PRESENTACION-CUENTA-PUBLICA-2019.pdf') }}">Presentación Cuenta Pública Participativa.</a></li> --}}
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2020/INFORME-FINAL-CPP-2020.pdf') }}">Informe Cuenta
                                    Pública Participativa 2018.</a></li>
                        </ul>
                    </dd>

                    <dt>Redes Sociales</dt>
                    <dd>
                        <ul>
                            <li><span class="bold">[Facebook]</span> <a href="https://www.facebook.com/CAJTA/videos/2878637625722687/" target="_blank">Ver Cuenta Pública Participativa CAJTA, Gestión 2020</a></li>
                            <li><span class="bold">[YouTube]</span> <a href="https://youtu.be/Pyn78kJ1yEQ" target="_blank">Ver Cuenta Pública Participativa CAJTA, Gestión 2020</a></li>
                            <li><a href="https://www.facebook.com/1074796289234468/posts/5113659768681413/" target="_blank">Invitación Cuenta Pública en Facebook</a></li>
                            <li><a href="https://www.instagram.com/p/CO8u6syLUxd/" target="_blank">Invitación Cuenta Pública en Instagram</a></li>
                            <li><a href="https://twitter.com/CAJTA_oficial/status/1394047397748170753?s=20" target="_blank">Invitación Cuenta Pública en Twitter</a></li>
                        </ul>
                    </dd>
                </dl>

                <dl>
                    <dt>Calendario de actividades</dt>
                </dl>

                <div class="table-responsive">
                    <table class="table table-stripped table-hover table-bordered">
                        <thead class="bg-primary">
                            <th class="center">FECHA</th>
                            <th class="center">HITO</th>
                        </thead>
                        <tbody>
                            <tr class="text-justify">
                                <td class="align-middle"><strong>Viernes 07 de mayo 2021</strong></td>
                                <td class="align-middle">Aprobación del Consejo de la Sociedad Civil del documento de rendición de Cuenta Pública Participativa.</td>
                            </tr>

                            <tr>
                                <td class="align-middle"><strong>Miércoles 19 de mayo 2021</strong></td>
                                <td class="align-middle">Publicación del documento de rendición de Cuenta Pública Participativa.</td>
                            </tr>

                            <tr class="text-justify">
                                <td class="align-middle"><strong>Miércoles 26 de mayo 2021</strong></td>
                                <td>
                                    <ul class="list-unstyled pl-0 ml-0 pb-0 mb-0">
                                        <li class="lista-tabla">Cuenta Pública Participativa presencial.</li><hr />
                                        <li class="lista-tabla">Inicio de Participación Virtual Ciudadana de la Cuenta Pública.</li>
                                    </ul>
                                </td>
                            </tr>

                            <tr class="text-justify">
                                <td class="align-middle"><strong>Miércoles 23 de junio 2021</strong></td>
                                <td class="align-middle">
                                    <ul class="list-unstyled pl-0 ml-0 pb-0 mb-0">
                                        <li class="lista-tabla">Término de la participación virtual ciudadana de la Cuenta Pública Participativa.</li><hr />
                                        <li class="lista-tabla">Publicación Informe Final del Mecanismo de Participación Ciudadana.</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>


                <div class="texto-separacion"></div><hr /><br />


                <h5 class="bold">Cuenta Pública 2019.</h5>

                <dl>
                    <dt>Informes</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cosoc/actas-2020/Acta_02-2020.pdf') }}">Acta de reunión, Consejo de la Sociedad Civil.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2019/CAJTA-CPP-2019.pdf') }}">Documento de rendición de Cuenta Pública 2019.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2019/PRESENTACION-CUENTA-PUBLICA-2019.pdf') }}">Presentación Cuenta Pública Participativa.</a></li>
                            {{--<li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2018/INFORME-CPP-2018.pdf') }}">Informe Cuenta Pública Participativa 2018.</a></li>--}}
                        </ul>
                    </dd>

                    <dt>Redes Sociales</dt>
                    <dd>
                        <ul>
                            <li><a href="https://www.facebook.com/CAJTA/photos/a.1144587092255387/3676146012432803/" target="_blank">Invitación Cuenta Pública en Facebook</a></li>
                            <li><a href="https://www.instagram.com/p/CAptq_HD1sX/" target="_blank">Invitación Cuenta Pública en Instagram</a></li>
                            <li><a href="https://twitter.com/CAJTA_oficial/status/1265263474642423808?s=20" target="_blank">Invitación Cuenta Pública en Twitter</a></li>
                            <li><span class="bold">[Facebook] </span><a target="_blank" href="https://www.facebook.com/CAJTA/videos/564262477840424/">Transmisión en vivo de la rendición de la Cuenta Pública Participativa 2019.</a></li>
                            <li><span class="bold">[Facebook] </span><a href="https://www.facebook.com/CAJTA/posts/3703843339663070" target="_blank">Publicación sobre Cuenta Pública Gestión 2019</a></li>
                            <li><span class="bold">[Facebook] </span><a href="https://www.facebook.com/media/set/?set=a.3695788713801866" target="_blank">Galería de imágenes - Funcionarios viendo Cuenta Pública (Parte 2)</a></li>
                            <li><span class="bold">[Facebook] </span><a href="https://www.facebook.com/media/set/?set=a.3695751073805630" target="_blank">Galería de imágenes - Funcionarios viendo Cuenta Pública (Parte 1)</a></li>
                            <li><span class="bold">[Facebook] </span><a href="https://www.facebook.com/media/set/?set=a.3695652653815472" target="_blank">Galería de imágenes - Autoridades siguiendo la Cuenta Pública</a></li>
                            <li><span class="bold">[Instagram] </span><a href="https://www.instagram.com/p/CAym6TEjHJ2/" target="_blank">Publicación sobre Cuenta Pública Gestión 2019</a></li>
                            <li><span class="bold">[Twitter] </span><a href="https://twitter.com/CAJTA_oficial/status/1266514172508098565?s=20" target="_blank">Publicación sobre Cuenta Pública Gestión 2019</a></li>
                        </ul>
                    </dd>
                </dl>

                <div class="texto-separacion"></div><hr /><br />

                <h5 class="bold">Cuenta Pública 2018.</h5>
                <dl>
                    <dt>Informes</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2018/CAJTA-CPP-2018.pdf') }}">Documento de rendición de Cuenta Pública 2018.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2018/ACTA-CPP-2018-COSOC.pdf') }}">Acta de reunión, Consejo de la Sociedad Civil.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2018/PRESENTACION-CPP-2018.pdf') }}">Presentación Cuenta Pública Participativa.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2018/INFORME-CPP-2018.pdf') }}">Informe Cuenta Pública Participativa 2018.</a></li>
                        </ul>
                    </dd>

                    <dt>Redes Sociales</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/pg/CAJTA/photos/?tab=album&album_id=2625261774187904">Galería de Fotos Cuenta Pública Participativa 2018.</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/CAJTA/videos/2232190300231855/">Transmisión en vivo de la Cuenta Pública Participativa 2018 en Facebook.</a></li>
                        </ul>
                    </dd>
                    <dt>Calendario</dt>
                </dl>

                <div class="table-responsive">
                    <table class="table table-stripped table-hover table-bordered">
                        <thead class="bg-primary">
                        <th class="center">FECHA</th>
                        <th class="center">HITO</th>
                        </thead>
                        <tbody>
                        <tr class="text-justify">
                            <td rowspan="3"><strong>Miércoles 15 de mayo 2019</strong></td>
                            <td>Aprobación del Consejo de la Sociedad Civil del documento de rendición de Cuenta Pública Participativa.</td>
                        </tr>

                        <tr>
                            <td>Publicación del documento de rendición de Cuenta Pública Participativa.</td>
                        </tr>

                        <tr>
                            <td>Publicación del acta de reunión del Consejo de la Sociedad Civil.</td>
                        </tr>

                        <tr class="text-justify">
                            <td rowspan="2"><strong>Viernes 24 de mayo 2019</strong></td>
                            <td>Cuenta Pública Participativa presencial.</td>
                        </tr>

                        <tr>
                            <td>Inicio de la participación virtual ciudadana de la Cuenta Pública Participativa.</td>
                        </tr>

                        <tr class="text-justify">
                            <td><strong>Viernes 05 de julio 2019</strong></td>
                            <td>Término de la participación virtual ciudadana de la Cuenta Pública Participativa.</td>
                        </tr>

                        <tr class="text-justify">
                            <td><strong>Viernes 26 de julio 2019</strong></td>
                            <td>Publicación del informe de la Cuenta Pública Participativa.</td>
                        </tr>


                        </tbody>
                    </table>
                </div>

                <div class="texto-separacion"></div><hr /><br />


                <h5 class="bold">Cuenta Pública 2017.</h5>
                <dl>
                    <dt>Informes</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2017/CAJTA-CPP-2017.pdf') }}">Documento de rendición de Cuenta Pública 2017.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2017/ACTA-CPP-2017-CSC.pdf') }}">Acta de reunión, Consejo de la Sociedad Civil.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2017/INFORME-CPP-2017.pdf') }}">Informe Cuenta Pública Participativa 2017.</a></li>
                        </ul>
                    </dd>

                    <dt>Redes Sociales</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/pg/CAJTA/photos/?tab=album&album_id=1877510968962992">Galería de Fotos Cuenta Pública Participativa 2017.</a></li>
                        </ul>
                    </dd>
                </dl>

                <div class="texto-separacion"></div><hr /><br />

                <h5 class="bold">Cuenta Pública 2016.</h5>
                <dl>
                    <dt>Informes</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2016/CAJTA-CPP-2016.pdf') }}">Documento de rendición de Cuenta Pública 2016.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2016/INFORME-CPP-2016.pdf') }}">Informe Cuenta Pública Participativa 2016.</a></li>
                        </ul>
                    </dd>

                    <dt>Redes Sociales</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/CAJTA/posts/1447517635295663">Galería de Fotos Cuenta Pública Participativa 2016.</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/CAJTA/videos/1448190425228384">Video Testimonio de usuarios atendidos por CAJTA - Cuenta Pública 2016.</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/notes/cajta/corporaci%C3%B3n-de-asistencia-judicial-rindi%C3%B3-en-la-ciudad-de-antofagasta-su-cuenta-/1451321548248605/">Publicación en Facebook: <span class="italic">"Corporación de Asistencia Judicial rindió en la ciudad de Antofagasta su Cuenta Pública Participativa del año 2016"</span>.</a></li>
                        </ul>
                    </dd>
                </dl>

                <div class="texto-separacion"></div><hr /><br />

                <h5 class="bold">Cuenta Pública 2015.</h5>
                <dl>
                    <dt>Informes</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2015/CAJTA-CPP.pdf') }}">Documento de rendición de Cuenta Pública 2015.</a></li>
                            <li><a target="_blank" href="{{ asset('assets/docs/partciudadana/cpp/2015/INFORME-CAJTA-CPP.pdf') }}">Informe Cuenta Pública Participativa 2015.</a></li>
                        </ul>
                    </dd>

                    <dt>Redes Sociales</dt>
                    <dd>
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/notes/cajta/cajta-realiza-su-cuenta-p%C3%BAblica-participativa-2015/1118367608210669/">Publicación en Facebook: <span class="italic">"CAJTA Realiza su Cuenta Pública Participativa 2015"</span>.</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/CAJTA/posts/1118383624875734">Galería de Fotos Cuenta Pública Participativa 2015.</a></li>
                            <li><a target="_blank" href="https://www.facebook.com/CAJTA/videos/1118409031539860">Video Testimonio de usuarios atendidos por CAJTA - Cuenta Pública 2015.</a></li>
                        </ul>
                    </dd>
                </dl>


                @include('pciudadana.layouts.otros-links')

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
