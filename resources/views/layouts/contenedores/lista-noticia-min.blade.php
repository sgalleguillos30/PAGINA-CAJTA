<div class="post tarjeta">
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
                >
            @endif
        </a>
    </div>

    <div class="texto">
        <span class="meta">{{ Carbon\Carbon::parse($noticia->fecha_noticia)->translatedFormat('d \d\e F \d\e Y') }}</span>
        <h4 class="title">
            <a href="{{ route('noticias.show', ['noticia' => $noticia->id_noticia]) }}">
                {{ $noticia->titulo_noticia }}
            </a>
        </h4>
    </div>
    <div class="clearfix"></div>
</div>
