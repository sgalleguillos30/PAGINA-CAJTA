<div class="clearfix"></div>
<div class="widget-container">
    <h5 class="titulo-seccion" style="margin-top: 25px;">Nuestras Oficinas</h5>

    @forelse($listaregion as $region)
        <div class="widget-centros-atencion">
            <a class="trigger" id="t-{{ $region->getNombreInicial() }}" data-region="{{ $region->getNombreInicial() }}">
                Región de <span class="text-bold">{{ $region->getNombreRegion() }}</span>
                <span class="icono"></span>
            </a>
            <div class="lista-centros-atencion" id="c-{{ $region->getNombreInicial() }}" style="display: none;">
                <ul>
                    @forelse ($region->unidad as $unidad)
                        @if ( (int) $unidad->id_tipounidad !== \App\Model\TipoUnidad::CONVENIO and $unidad->id_estado === \App\Model\Estado::ACTIVO )
                            <li>
                                <a href="{{ route('unidad.show', ['unidad' => $unidad->id_unidad]) }}">
                                    <span>{{ $unidad->nombre_unidad }}</span>
                                </a>
                            </li>
                        @endif
                    @empty
                        <li>No hay centros registrados</li>
                    @endforelse
                </ul>
            </div>
        </div>
    @empty
        <p>No hay centros registrados.</p>
    @endforelse


    @if ( !empty( $unidadConvenio ) )
        <div class="widget-centros-atencion">
            <a class="trigger" id="t-convenio" data-region="convenio">
                Centros de Atención en
                <strong> Convenio</strong>
                <span class="icono"></span>
            </a>
            <div class="lista-centros-atencion" id="c-convenio" style="display: none;">
                <ul>
                    @foreach ( $unidadConvenio as $convenio )
                        <li>
                            <a href="{{ route('unidad.show', ['unidad' => $convenio->id_unidad]) }}">
                                <span>
                                    <strong>[ {{ $convenio->ciudad->ciudad }} ]</strong>
                                    {{ $convenio->nombre_unidad }}
                                </span>
                            </a>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif

</div>
