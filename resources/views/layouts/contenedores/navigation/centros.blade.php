<li>
    <a class="{{ (Request::is('unidad') or Request::is('unidad/*')) ? "current" : "" }}" href="#">Nuestras Oficinas</a>
    <ul class="sub-menu">
        @forelse($listaregion as $region)
            <li>
                <a href="{{ route('unidad.index') }}">{{ $region->region }}</a>
                <ul class="sub-menu">
                    @forelse ($region->unidad as $unidad)
                        @if ( (int) $unidad->id_tipounidad !== \App\Model\TipoUnidad::CONVENIO  and $unidad->id_estado === \App\Model\Estado::ACTIVO )
                            <li>
                                <a href="{{ route('unidad.show', ['unidad' => $unidad->id_unidad]) }}">
                                    {{ $unidad->nombre_unidad }}
                                </a>
                            </li>
                        @endif
                    @empty
                        <li>No hay centros registrados</li>
                    @endforelse
                </ul>
            </li>
        @empty
            <li>No hay regiones registradas.</li>
        @endforelse
    </ul>
</li>
