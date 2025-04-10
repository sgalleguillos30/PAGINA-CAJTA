<div class="texto-separacion"></div><hr />

<p class="italic bold opensans">Vea otros mecanismos de participación ciudadana:</p>

<div class="list-group opensans">
    @if ( !Request::is('participacion-ciudadana/index'))
        <a class="list-group-item list-group-item-action opensans" href="{{ route('pciudadana.index') }}">Volver</a>
    @endif


    @if ( !Request::is('participacion-ciudadana/cosoc'))
        <a class="list-group-item list-group-item-action opensans" href="{{ route('pciudadana.cosoc') }}">Consejo de la Sociedad Civil</a>
    @else
        <button type="button" class="list-group-item list-group-item-action opensans text-center{{ Request::is('participacion-ciudadana/cosoc') ? " active text-bold" : "" }}">Consejo de la Sociedad Civil</button>
    @endif


    @if ( !Request::is('participacion-ciudadana/cuentas-publicas'))
        <a class="list-group-item list-group-item-action opensans" href="{{ route('pciudadana.cpp') }}">Cuentas Públicas Participativas</a>
    @else
        <button type="button" class="list-group-item list-group-item-action opensans text-center{{ Request::is('participacion-ciudadana/cuentas-publicas') ? " active text-bold" : "" }}">Cuentas Públicas Participativas</button>
    @endif


    @if ( !Request::is('participacion-ciudadana/consulta-ciudadana'))
        <a class="list-group-item list-group-item-action opensans" href="{{ route('pciudadana.consciudadana') }}">Consulta Ciudadana</a>
    @else
        <button type="button" class="list-group-item list-group-item-action opensans text-center{{ Request::is('participacion-ciudadana/consulta-ciudadana') ? " active text-bold" : "" }}">Consulta Ciudadana</button>
    @endif


    @if ( !Request::is('participacion-ciudadana/plaza-justicia'))
        <a class="list-group-item list-group-item-action opensans" href="{{ route('pciudadana.plazajusticia') }}">Plazas de Justicia</a>
    @else
        <button type="button" class="list-group-item list-group-item-action opensans text-center{{ Request::is('participacion-ciudadana/plaza-justicia') ? " active text-bold" : "" }}">Plazas de Justicia</button>
    @endif


    @if ( !Request::is('participacion-ciudadana/moviles'))
        <a class="list-group-item list-group-item-action opensans" href="{{ route('pciudadana.moviles') }}">Consultorios Jurídicos Móviles</a>
    @else
        <button type="button" class="list-group-item list-group-item-action opensans text-center{{ Request::is('participacion-ciudadana/moviles') ? " active text-bold" : "" }}">Consultorios Jurídicos Móviles</button>
    @endif


    @if ( !Request::is('participacion-ciudadana/informacion-relevante'))
        <a class="list-group-item list-group-item-action opensans" href="{{ route('pciudadana.inforelevante') }}">Acceso a la Información Relevante</a>
    @else
        <button type="button" class="list-group-item list-group-item-action opensans text-center{{ Request::is('participacion-ciudadana/informacion-relevante') ? " active text-bold" : "" }}">Acceso a la Información Relevante</button>
    @endif
</div>
