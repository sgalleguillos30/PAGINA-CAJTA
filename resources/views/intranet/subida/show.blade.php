@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Noticias
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('noticias.index') }}">Noticias</a></li>
    <li class="sep">/</li>
    <li>Información noticia</li>
@endpush

@section('contenido')

    <div class="post">
        <div class="pic">
            @if ( empty($noticia->portada_noticia) )
                <img src="http://via.placeholder.com/660x300/FFF/0f69b4?text=Imagen+no+disponible" alt="{{ $noticia->titulo_noticia }}">
            @else
                <img src="{{ asset('media/noticias/portada/' . $noticia->portada_noticia) }}" alt="{{ $noticia->titulo_noticia }}" id="imgSize">
            @endif
        </div>

        <div class="clearfix"></div>
        <div class="social social-left">
            <ul>
                <li>
                    <div class="fb-like" data-href="https://www.facebook.com/CAJTA/" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                </li>
            </ul>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <span class="meta">{{ Carbon\Carbon::parse($noticia->fecha_noticia)->translatedFormat('d \d\e F \d\e Y') }}</span>
            <h3 class="title" @if( empty($noticia->contenido_noticia)) style="border-bottom: none; text-align: center;" @endif>{{ $noticia->titulo_noticia }}</h3>
            <div class="contenido">
                <p>{!! $noticia->contenido_noticia !!} </p>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="texto text-center"><hr /><br />
            <a href="{{ route('noticias.index') }}" class="btn btn-danger text-center" style="font-size: 15px;">&laquo; Ver más noticias</a>
        </div>
    </div>

@endsection
