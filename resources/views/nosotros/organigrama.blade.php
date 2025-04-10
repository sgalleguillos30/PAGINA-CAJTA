@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Quienes Somos
@endsection

@push('breadcrumbs')
    <li>Quiénes somos</li>
    <li class="sep">/</li>
    <li>Organigrama</li>
@endpush

@section('contenido')

    <div class="post">
        <div class="post-header">
            <h4>Quiénes Somos</h4>
            <h3>Organigrama</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title text-center">Dirección General</h3>
                <div class="table-responsive">
                    <div id="org-dirgen"></div>
                </div>

                <div class="texto-separacion"></div><hr />
                <div class="texto-separacion"></div>

                <div class="table-responsive">

                    <h3 class="title text-center">Área de Administración Interna</h3>
                    <div id="org-adminterna"></div>
                </div>

                <div class="texto-separacion"></div><hr />
                <div class="texto-separacion"></div>

                <div class="table-responsive">

                    <h3 class="title text-center">Área Operativa Institucional</h3>
                    <div id="org-admoperativa"></div>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection


@push('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.orgchart.css') }}">
    <style type="text/css">
        .orgchart { background: #fff; }
        .orgchart td.left, .orgchart td.right, .orgchart td.top { border-color: #aaa; }
        .orgchart td>.down { background-color: #aaa; }
        .orgchart .staff td.left, .orgchart td.right, .orgchart td.top { border-color: #aaa; border-style: dotted; }
        .orgchart .staff td>.down { background-color: #aaa; }

        .orgchart .node .title,
        .orgchart .node .content { height: auto; white-space: pre-line; }

        .orgchart .rojo .title { background-color: #FC0D1B; }
        .orgchart .rojo .content { border-color: #FC0D1B; }
        .orgchart .cafe .title { background-color: #8D3634; }
        .orgchart .cafe .content { border-color: #8D3634; }
        .orgchart .cafe2 .title { background-color: #933836; }
        .orgchart .cafe2 .content { border-color: #933836; }
        .orgchart .azul .title { background-color: #084E8D; }
        .orgchart .azul .content { border-color: #084E8D; }
        .orgchart .amarillo .title { background-color: #FBBE40; }
        .orgchart .amarillo .content { border-color: #FBBE40; }
        .orgchart .celeste .title { background-color: #578ED3; }
        .orgchart .celeste .content { border-color: #578ED3; }
        .orgchart .verde .title { background-color: #558139; }
        .orgchart .verde .content { border-color: #558139; }
        .orgchart .convenio .title { background-color: #6F359E; border-style: dotted; }
        .orgchart .convenio .content { border-color: #6F359E; border-style: dotted; }
        .main .post .texto .contenido ul li { list-style-type: none; }
        .main .post .texto .contenido ul { margin-bottom: 5px; }
        #org-dirgen,
        #org-adminterna,
        #org-admoperativa { text-align: center; }
    </style>
@endpush

@push('scripts')
    <script src="{{ asset('assets/js/jquery.orgchart.js') }}"></script>
    <script type="text/javascript">
        jQuery(document).ready(function() {

            var datasource = {
                'name': 'Consejo Directivo',
                'className': 'rojo',
                'children': [{
                    'name': 'Director General (Directivo)',
                    'title': 'Carolina Fernández Alvear',
                    'className': 'cafe',
                    'children': [{
                        'name': 'Comité Estratégico',
                        'className': 'cafe2',
                        'children': [
                            { 'name': 'Asesor Jurídico', 'title': 'Gerardo Salinas Muñoz', 'className': 'azul staff' },
                            { 'name': 'Asesor de Gestión y Presupuesto', 'title': 'Patricio Vatel Gutierrez', 'className': 'azul' },
                            { 'name': 'Auditor Interno', 'title': 'Cristian Quiñones Vergara', 'className': 'azul' },
                            {
                                'name': 'Asesor de Comunicaciones',
                                'title': 'René Madariaga Caronna',
                                'className': 'azul',
                                'children': [
                                    { 'name': 'Administrativo de Comunicaciones', 'className': 'amarillo' },
                                ]
                            },
                            {
                                'name': 'Secretaria Dirección General',
                                'title': 'Uberlinda Cayo Ferreira',
                                'className': 'azul',
                                'children': [
                                    { 'name': 'Conductor y Servicios Generales', 'title': 'Mauricio Zúñiga del Campo', 'className': 'azul' },
                                    { 'name': 'Auxiliar Estafeta', 'title': 'Gredumila', 'className': 'azul' }
                                ]
                            },
                            { 'name': 'Coordinador Operativo y de Atención Especializada', 'title': 'Andrea Valdivia Espinoza', 'className': 'azul' },
                            {
                                'name': 'Área de Administración Interna',
                                'className': 'celeste',
                            },
                            {
                                'name': 'Área Operativa Institucional',
                                'title': '', 'className':
                                    'celeste',
                            },
                        ]
                    }]
                }]
            };

            var adminterna = {
                'name': 'Área de Administración Interna',
                'className': 'celeste',
                'children': [
                    {
                        'name': 'Jefe de Unidad de Planificación y Control',
                        'title': 'Karen Peralta Silva',
                        'className': 'verde',
                        'children': [
                            {
                                'name': 'Jefe de Proyectos y Convenios',
                                'className': 'amarillo',
                                'children': [
                                    {
                                        'name': 'Asesor de las Tecnologías de la Información y Comunicación',
                                        'title': 'Emilio Caroca Rueda',
                                        'className': 'azul',
                                        'children': [
                                            { 'name': 'Técnico de Desarrollo y Soporte de Sistemas', 'title': 'Rodrigo Bravo Solis', 'className': 'azul' }
                                        ]
                                    },
                                    {
                                        'name': 'Jefe de Informática',
                                        'title': 'Cristian Palominos Hidalgo',
                                        'className': 'azul',
                                        'children': [
                                            { 'name': 'Técnico Informático y de Planificación Antofagasta', 'title': 'Víctor Martínez Fernández', 'className': 'rojo' },
                                            { 'name': 'Técnico Informático y Soporte de Hardware Arica', 'title': '', 'className': 'amarillo' },
                                        ]
                                    },
                                ]
                            },
                        ]
                    },
                    {
                        'name': 'Jefe de Unidad de Administración y Finanzas',
                        'title': 'Mary Jane Miranda Cortez',
                        'className': 'verde',
                        'children': [
                            {
                                'name': 'Jefe de Contabilidad y Presupuesto I, II y XV',
                                'title': 'Abel Núñez Torres',
                                'className': 'azul',
                                'children': [
                                    { 'name': 'Encargado de Tesorería I, II y XV', 'title': 'Elías Araya Azocar', 'className': 'azul' },
                                    { 'name': 'Técnico de Adquisiciones y Servicios Generales I y XV', 'title': 'Luz Rodriguez Nievas', 'className': 'azul' },
                                    { 'name': 'Técnico de Adquisiciones y Servicios Generales II', 'title': 'Leslie Jorquera Merino', 'className': 'azul' },
                                    { 'name': 'Técnico de Licencias Médicas', 'title': '', 'className': 'rojo' },
                                    { 'name': 'Administrativo de Administración y Finanzas', 'title': '', 'className': 'azul' },
                                    { 'name': 'Secretaria Oficina de Partes y OIRS', 'title': '', 'className': 'azul' },
                                    // { 'name': 'Administrativo de Administración y Encargado de Bodega', 'title': '', 'className': 'amarillo' },
                                ]
                            },
                        ]
                    },
                    {
                        'name': 'Jefe de Unidad de Recursos Humanos',
                        'title': 'Ana María Vega Vergara',
                        'className': 'verde',
                        'children': [
                            {
                                'name': 'Jefe de Personal y Remuneraciones',
                                'title': 'Marta Lafertte Rodríguez',
                                'className': 'azul',
                                'children': [
                                    { 'name': 'Encargado de Personal I y XV', 'title': 'Juan Picón Arce', 'className': 'azul' },
                                    { 'name': 'Administrativo de RRHH, Región de Tarapacá', 'title': '', 'className': 'rojo' },
                                    { 'name': 'Administrativo de RRHH, Región de Antofagasta', 'title': '', 'className': 'rojo' },
                                ],
                            },
                            { 'name': 'Encargada de Bienestar y Licencias Médicas', 'title': 'Lidia Muñoz Vera', 'className': 'azul' },
                            { 'name': 'Encargado de Desarrollo y Capacitación', 'title': '', 'className': 'azul' },
                            { 'name': 'Técnico en Prevención de Riesgos', 'title': '', 'className': 'azul' },
                        ],
                    },
                ]
            };

            var admoperativa = {
                'name': 'Área Operativa Institucional',
                'title': '', 'className':
                    'celeste',
                'children': [
                    {
                        'name': 'Director Regional de Arica y Parinacota',
                        'title': 'Rodrigo Fuentes Garcés',
                        'className': 'azul',
                        'children': [
                            { 'name': 'Jefe Regional de Administración General y Personas', 'title': 'Jacqueline Monzón Patiño', 'className': 'azul' },
                            { 'name': 'Secretaria', 'title': 'Elizabeth Cifuentes', 'className': 'azul' },
                            { 'name': 'Receptor Judicial 1', 'title': 'Héctor Zavala', 'className': 'azul' },
                            { 'name': 'Receptor Judicial 2', 'title': 'Alejandra Perez', 'className': 'azul' },
                            { 'name': 'Conductor', 'title': 'Mario Molina', 'className': 'azul' },
                            { 'name': 'Consultorio Jurídico de Arica', 'title': 'Mauricio Vega', 'className': 'azul' },
                            { 'name': 'CAVI de Arica', 'title': 'Sandra Becerra Luck', 'className': 'azul' },
                            { 'name': 'ODL de Arica', 'title': 'Claudia Villalobos Pepe', 'className': 'azul' },
                            { 'name': 'Móvil de Arica', 'title': 'Lidia Ortuño', 'className': 'azul' },
                            { 'name': 'Centro de Atención Jurídica, UTA Arica', 'title': 'Lidia Ortuño', 'className': 'convenio' },
                            { 'name': 'Programa Mi Abogado Arica (Representación Jurídica Niños, Niñas y Adolescentes)', 'title': 'Andrea Aillon', 'className': 'convenio' },
                            { 'name': 'Convenio SENADIS Arica', 'title': '', 'className': 'convenio' },
                        ]
                    },
                    {
                        'name': 'Director Regional de Tarapacá',
                        'title': 'Marcos Gómez Matus',
                        'className': 'azul',
                        'children': [
                            { 'name': 'Jefe Regional de Administración General y Personas', 'title': 'Evelyn Jofré Veliz', 'className': 'azul' },
                            { 'name': 'Secretaria', 'title': 'Elizabeth Cifuentes', 'className': 'azul' },
                            { 'name': 'Receptor Judicial 1', 'title': 'Carlos Acosta', 'className': 'azul' },
                            { 'name': 'Receptor Judicial 2', 'title': 'Olga Guaglia', 'className': 'azul' },
                            { 'name': 'Receptor Judicial 2', 'title': 'Julia Soliz', 'className': 'azul' },
                            { 'name': 'Conductor', 'title': 'Mario Molina', 'className': 'azul' },
                            { 'name': 'Consultorio Jurídico de Iquique', 'title': 'Valeska Sobrado Pávez', 'className': 'azul' },
                            { 'name': 'Consultorio Jurídico de Alto Hospicio', 'title': 'Rosa Chipoco Aguilera', 'className': 'azul' },
                            { 'name': 'Consultorio Jurídico de Pozo Almonte', 'title': 'Oscar Vásquez', 'className': 'azul' },
                            { 'name': 'Móvil del Tamarugal', 'title': 'Oscar Vásquez', 'className': 'azul' },
                            { 'name': 'Centro de Familia de Iquique', 'title': 'Sandra Rivas', 'className': 'azul' },
                            { 'name': 'CAVI de Iquique', 'title': 'Carol Murray Rivera', 'className': 'azul' },
                            { 'name': 'ODL de Iquique', 'title': 'Daniel Sanchez Bustillos', 'className': 'azul' },
                            { 'name': 'Centro de Mediación de Iquique', 'title': 'Myling Chau Colman', 'className': 'azul' },
                            { 'name': 'Programa Mi Abogado Iquique (Representación Jurídica Niños, Niñas y Adolescentes)', 'title': 'Andrea Aillon', 'className': 'convenio' },
                            { 'name': 'Centro de Atención Jurídica, UTA Iquique', 'title': '', 'className': 'convenio' },
                            { 'name': 'Convenio SENADIS Iquique', 'title': '', 'className': 'convenio' },
                        ]
                    },
                    {
                        'name': 'Director Regional de Antofagasta',
                        'title': 'Giancarlo Fontana Adasme',
                        'className': 'azul',
                        'children': [
                            { 'name': 'Jefe Regional de Administración General y Personas', 'title': 'Felipe Pincheira', 'className': 'azul' },
                            { 'name': 'Secretaria', 'title': 'Erica Araya', 'className': 'azul' },
                            { 'name': 'Receptor Judicial 1', 'title': '', 'className': 'azul' },
                            { 'name': 'Receptor Judicial 2', 'title': '', 'className': 'azul' },
                            { 'name': 'Receptor Judicial 2', 'title': '', 'className': 'azul' },
                            { 'name': 'Conductor', 'title': '', 'className': 'azul' },
                            {
                                'name': 'Consultorio Jurídico Antofagasta Norte',
                                'title': 'Rodrigo Acevedo',
                                'className': 'azul',
                                'children': [
                                    { 'name': 'Móvil Taltal', 'title': '', 'className': 'azul' },
                                ]
                            },
                            {
                                'name': 'Consultorio Jurídico Antofagasta Centro',
                                'title': '',
                                'className': 'azul',
                                'children': [
                                    { 'name': 'Móvil Mejillones', 'title': '', 'className': 'azul' },
                                ]
                            },
                            {
                                'name': 'Consultorio Jurídico de Tocopilla',
                                'title': 'Claudia Gonzalez Gjordan',
                                'className': 'azul',
                                'children': [
                                    { 'name': 'Móvil María Elena', 'title': '', 'className': 'azul' },
                                ]
                            },
                            {
                                'name': 'Consultorio Jurídico de Calama',
                                'title': 'Alejandro Vicencio',
                                'className': 'azul',
                                'children': [
                                    { 'name': 'Móvil San Pedro de Atacama', 'title': '', 'className': 'azul' },
                                ]
                            },
                            { 'name': 'CAVI de Antofagasta', 'title': 'May-Lyn Rojas Valdivia', 'className': 'azul' },
                            {
                                'name': 'ODL de Antofagasta',
                                'title': 'Eduardo Díaz Monterrey',
                                'className': 'azul',
                                'children': [
                                    { 'name': 'ODL de Calama', 'title': '', 'className': 'azul' },
                                ]
                            },
                            { 'name': 'Centro de Atención Jurídica, UAC Calama', 'title': '', 'className': 'convenio' },
                            { 'name': 'Centro de Atención Jurídica, U. Antofagasta', 'title': '', 'className': 'convenio' },
                            { 'name': 'Convenio SENADIS Antofagasta', 'title': '', 'className': 'convenio' },
                        ]
                    },
                ]
            };

            $("#org-dirgen").orgchart({
                'data': datasource,
                // 'nodeContent': 'title',
                'direction': 't2b',
                'verticalLevel': 4
            });

            $("#org-adminterna").orgchart({
                'data': adminterna,
                // 'nodeContent': 'title',
                'direction': 't2b',
                'verticalLevel': 4
            });

            $("#org-admoperativa").orgchart({
                'data': admoperativa,
                // 'nodeContent': 'title',
                'direction': 't2b',
                'verticalLevel': 3
            });
        });
    </script>
@endpush
