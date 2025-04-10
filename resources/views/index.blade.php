@extends('layouts.estructura-inicial')

<?php $contador = 1; ?>
@section('title')
    CAJTA | Inicio
@endsection

@push('titulo_seccion')
    <h5 class="titulo-seccion">Noticias</h5>
@endpush

@section('contenido')

    @if ( \App\Model\Noticia::count() === 0 )
        <h4>Lo sentimos, no hay noticias registradas para mostrar.</h4>
    @else
        @foreach ( \App\Model\Noticia::where('id_estadonot', \App\Model\EstadoNoticia::PUBLICADO)->orderBy('fecha_noticia', 'desc')->take(5)->latest()->get() as $noticia)
            @if ($contador === 1)
                <div class="post tarjeta destacado">
                    <div class="pic">
                        <a href="{{ route('noticias.show', ['noticia' => $noticia->id_noticia]) }}">
                            @if ( empty($noticia->portada_noticia) )
                                <img
                                    src="http://via.placeholder.com/0f69b4/FFFFFF/660x330?text=Imagen+no+disponible"
                                    alt="Imagen no disponible"
                                    class="no-disponible"
                                >
                            @else
                                <img
                                    src="{{ asset('assets/media/noticias/portada/' . $noticia->portada_noticia) }}"
                                    alt="{{ $noticia->titulo_noticia }}"
                                    id="imgDestacado"
                                >
                            @endif
                        </a>
                    </div>

                    <div class="texto">
                        <div class="left">
                            <h4 class="title">
                                <a href="{{ route('noticias.show', ['noticia' => $noticia->id_noticia]) }}">
                                    {{ $noticia->titulo_noticia }}
                                </a>
                            </h4>
                        </div>

                        <div class="right">
                            <span class="meta">{{ Carbon\Carbon::parse($noticia->fecha_noticia)->translatedFormat('d \d\e F \d\e Y') }}</span>

                            @if ( empty($noticia->contenido_noticia))
                                <i>Sin información</i>
                            @else
                                <p>
                                    {!!  Str::limit($noticia->contenido_noticia, 350) !!}
                                    <a class="blue bold" href="{{ route('noticias.show', ['noticia' => $noticia->id_noticia]) }}">Continuar leyendo</a>
                                </p>
                            @endif
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div class="social">
                        <ul>
                            <li>
                                <div class="fb-like" data-href="https://www.facebook.com/CAJTA/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            </li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                </div>
                <?php $contador++; ?>
            @else
                @include('layouts.contenedores.lista-noticia-min')
            @endif
        @endforeach
        <a href="{{ route('noticias.index') }}" class="boton">
            + Ver más <strong>Noticias</strong>
        </a>
    @endif
@endsection
