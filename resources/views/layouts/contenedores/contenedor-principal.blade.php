<div class="main">
    <div class="stream">

        {{--<div class="mb-5">
            <a href="https://cajta.cl/participacion-ciudadana/cuentas-publicas">
                <img src="{{ asset('assets/images/Banners/CPP/2024/BANNER-CPP-2023.png') }}"
                    style="width: 660px; border: 0.5px solid #999999; box-shadow: 3px 5px 6px rgba(0, 0, 0, 0.4);" />
            </a>
        </div>

        {{--<div class="clearfix"></div>--}}

        <div class="mb-5">
            {{--<a href="https://cajta.cl/participacion-ciudadana/cuentas-publicas">--}}
                <img class="img-responsive"
                    src="{{ asset('assets/images/Banners/CAMPANAS/2025/mes-del-trabajador.png') }}"
                    style="width: 660px; border: 0.5px solid #999999; box-shadow: 3px 5px 6px rgba(0, 0, 0, 0.4);" />
                {{--</a>--}}
        </div>

        <div class="clearfix"></div>

        @stack('titulo_seccion')

        @yield('contenido')
    </div>
    @stack('adicional')
</div>