<div class="sidebar">
    @include('layouts.contenedores.sidebar.buscador')

    @include('layouts.contenedores.sidebar.rss')

    @include('layouts.contenedores.sidebar.centros')

    @include('layouts.contenedores.sidebar.transparencia', ['mosaico' => false])

    @include('layouts.contenedores.sidebar.banners')
    <div class="clearfix"></div>
</div>
