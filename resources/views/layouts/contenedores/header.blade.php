<header>
    <div class="header-container">
        <img src="{{ asset('assets/images/Logos/ISOLOGO-GOB.JPG') }}" alt="Corporación de Asistencia Judicial de las Regiones de Tarapacá y Antofagasta">

        <div class="row">
            <h2 class="col-md-12 text-center mt-5 pt-4"><i>"Tu Acceso a la Justicia"</i></h2>
        </div>
    </div>

    <div class="startchange"></div>

    <div class="carousel slide carousel-fade" id="carousel" data-ride="carousel">

        <!-- // Carousel Indicators -->
        {{--<ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>--}}

        <!-- // Carousel Items -->
        <div class="carousel-inner">
            <div class="item active" data-type="background">
                <div class="carousel-caption">
                    <h4>Plaza Prat - Iquique</h4>
                </div>
            </div>
            <div class="item" data-type="background">
                <div class="carousel-caption">
                    <h4>La Portada - Antofagasta</h4>
                </div>
            </div>
            <div class="item" data-type="background">
                <div class="carousel-caption">
                    <h4>Morro de Arica - Arica</h4>
                </div>
            </div>
        </div>

        {{--<a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Anterior</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Siguiente</span>
        </a>--}}

    </div>

    @include('layouts.contenedores.navigation')
</header>
