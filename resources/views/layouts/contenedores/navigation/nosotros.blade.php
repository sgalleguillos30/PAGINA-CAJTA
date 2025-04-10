<li>
    {{--<a class="{{ (Request::is('nosotros') or Request::is('nosotros/*')) ? "current" : "" }}" href="#">Quiénes Somos</a>--}}
    <a class="{{ Request::is('nosotros/*') ? "current" : "" }}" href="#">Quiénes Somos</a>
    <ul class="sub-menu">
        <li><a href="{{ route('nosotros.presentacion') }}">Presentación</a></li>
        <li>
            <a href="#">Servicios</a>
            <ul class="sub-menu">
                <li><a href="{{ route('nosotros.servicios.materias') }}">Principales Materias</a></li>
                <li><a href="{{ route('nosotros.servicios.prestaciones') }}">Líneas de Servicios</a></li>
                <li><a href="{{ route('nosotros.servicios.usuarios') }}">Usuarios</a></li>
            </ul>
        </li>
        <li>
            <a>Postulantes</a>
            <ul class="sub-menu">
                <li><a href="{{ route('nosotros.postulantes') }}">Información General</a></li>
                <li><a href="{{ route('nosotros.postulantes.solicitud') }}">Solicitud de Certificado</a></li>
            </ul>
        </li>
        <li><a href="{{ route('nosotros.consejo') }}">Consejo Directivo</a></li>
        <li>
            <a href="#">Jefes Superiores del Servicio</a>
            <ul class="sub-menu">
                @foreach ( $directores as $director)
                    <li>
                        <a href="{{ route('nosotros.autoridades', ['usuario' => $director->cargo_us]) }}">
                            {{ $director->cargo_us }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </li>

        <li><a href="{{ route('nosotros.organigrama') }}">Organigrama</a></li>
        <li><a href="{{ route('nosotros.testimonios') }}">Testimonios de Usuarios</a></li>
        <li><a href="{{ route('nosotros.resumen') }}">Resumen</a></li>
    </ul>
</li>
