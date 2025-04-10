<div class="wrap">
    <div class="sobre">
        <div class="banda-bicolor">
            <span class="azul"></span>
            <span class="rojo"></span>
        </div>

        <div class="titulosobre">
            <div class="texto">
                <h1>
                    ¿Qué es la Corporación <br />
                    de Asistencia Judicial?
                </h1>
            </div>
        </div>

        <div class="vertical"></div>

        <div class="textosobre">
            <div class="texto">
				<span>
					La Corporación de Asistencia Judicial es un Servicio Público autónomo relacionado con el Ministerio de Justicia y Derechos Humanos, que garantiza a todas las personas en condiciones de vulnerabilidad la igual protección de la ley en el ejercicio de sus derechos, a través de un equipo humano competente y altamente comprometido, integrado por abogados, trabajadores sociales, psicólogos, técnicos jurídicos y personal administrativo.<br />
                    @if ( Request::is('/') )
                        <a href="{{ route('nosotros.presentacion') }}">Sepa más de nosotros</a>
                    @endif
				</span>
            </div>
        </div>

        <div class="clearfix"></div>
    </div><!-- Sobre -->

    <div class="datos">
        <div class="autoridades">
            <div class="texto">
                <h2>Jefes Superiores de Servicio</h2>
                @foreach ( $directores as $director)
                    <span>{{ $director->getUsername() }}</span>
                    <a href="{{ route('unidad.show', ['unidad' => $director->id_unidad]) }}">{{ $director->cargo_us }}</a>
                @endforeach
            </div>
            <div class="clearfix"></div>
        </div>

        <div class="redes-lista">
            <h2 class="titulo-seccion">Síguenos</h2>
            <ul>
                @include('layouts.contenedores.repetidos.rss')
            </ul>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
