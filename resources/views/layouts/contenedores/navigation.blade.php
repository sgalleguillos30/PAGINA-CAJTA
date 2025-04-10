<div class="header-navbar">
    <nav class="menu-principal">
        <ul class="main-menu">
            <li><a class="{{ Request::is('/') ? 'current' : '' }}" href="{{ route('home') }}">Inicio</a></li>
            {{--OPCIÓN NOSOTROS--}}
            @include('layouts.contenedores.navigation.nosotros')

            {{--OPCIÓN CENTROS--}}
            @include('layouts.contenedores.navigation.centros')

            <li><a class="{{ Request::is('concursos/*') ? 'current' : '' }}" href="{{ route('concursos.index') }}">Concursos</a></li>
            <li><a class="{{ Request::is('contacto') ? 'current' : '' }}" href="{{ route('contacto.index') }}">Contacto</a></li>
            <li><a class="{{ ( Request::is('noticias') or Request::is('noticias/*') ) ? 'current' : '' }}" href="{{ route('noticias.index') }}">Noticias</a></li>
            {{--<!-- <li><a href="#">Galería</a></li> -->--}}
            <li><a href="https://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=AK010" target="_blank">Transparencia Activa</a></li>
        </ul>
    </nav>
</div>




<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->
<!-- --------------------------------------------------------------------------- -->



<div class="header-navbar-mobile">
    <div class="wrap">
        <h1 class="logo">
            <a href="#"><img src="{{ asset('assets/images/logoMobile.png') }}" alt="Menú Principal"></a>
        </h1>
    </div>

    <a href="" class="trigger">
        <span></span>
    </a>

    <nav class="menu-principal-mobile">
        <div class="wrap">
            <ul class="clearfix">
                <li><a class="current" href="{{ route('home') }}">Inicio</a></li>

                {{--OPCIÓN NOSOTROS--}}
                @include('layouts.contenedores.navigation.nosotros')

                {{--OPCIÓN CENTROS--}}
                @include('layouts.contenedores.navigation.centros')

                <li><a class="current" href="{{ route('concursos.index') }}">Concursos</a></li>
                <li><a class="current" href="{{ route('contacto.index') }}">Contacto</a></li>
                <li><a class="current" href="{{ route('noticias.index') }}">Noticias</a></li>
                {{--<!-- <li><a href="#">Galería</a></li> -->--}}
                <li><a href="https://www.portaltransparencia.cl/PortalPdT/pdtta?codOrganismo=AK010" target="_blank">Transparencia Activa</a></li>
            </ul>
        </div>
    </nav>
</div>
