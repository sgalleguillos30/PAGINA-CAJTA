@forelse ($redsocial as $rss)
    <li class="{{ strtolower($rss->red_social) }}">
        <a href="{{ $rss->link_redsocial }}" target="_blank" class="clearfix">
            <span class="icono"></span>
            <div class="texto">
                <span class="red">{{ $rss->red_social }}</span>
                <span class="usuario">{{ $rss->usuario_redsocial }}</span>
            </div>
        </a>
    </li>
@empty
    <p>No hay Redes Sociales registradas.</p>
@endforelse
