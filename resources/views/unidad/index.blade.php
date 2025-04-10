@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Nuestras Oficinas
@endsection

@push('breadcrumbs')
    <li>Nuestras Oficinas</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Nuestras Oficinas</h4>
            <h3>Y Centros de Atención</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <p>Haga click en una de nuestras oficinas y/o centros de atención para ver más detalles:</p>

                @forelse($listaregion as $region)
                    <h4 class="bold text-center pt-4">{{ $region->region }}</h4><hr />
                    <ul>
                        @forelse ($region->unidad as $unidad)
                            @if ( (int) $unidad->id_tipounidad !== \App\Model\TipoUnidad::CONVENIO )
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
                @empty
                    <p>No hay centros registrados.</p>
                @endforelse

                <h4 class="bold text-center pt-4">Centros de Atención en Convenio con CAJTA</h4><hr />
                <ul>
                    @foreach ( $unidadConvenio as $convenio )
                        <li>
                            <span class="text-bold">[ {{ $convenio->ciudad->ciudad }} ]</span>
                            <a href="{{ route('unidad.show', ['unidad' => $convenio->id_unidad]) }}">{{ $convenio->nombre_unidad }}</a>
                        </li>
                    @endforeach
                </ul>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
