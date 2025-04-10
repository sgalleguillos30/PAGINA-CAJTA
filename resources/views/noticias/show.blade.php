@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Noticias
@endsection

@push('breadcrumbs')
    <li><a href="{{ route('noticias.index') }}">Noticias</a></li>
    <li class="sep">/</li>
    <li>Información noticia</li>
@endpush

@push('styles')
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap-social.css') }}">
@endpush

@push('scripts')
    <script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        $(document).ready(function(){
            $(".fancybox").fancybox({
                openEffect: "none",
                closeEffect: "none"
            });

            $(".zoom").hover(function(){

                $(this).addClass('transition');
            }, function(){

                $(this).removeClass('transition');
            });
        });

    </script>
@endpush



@section('contenido')

    <div class="post">
        <div class="pic">
            @if ( empty($noticia->portada_noticia) )
                <img src="http://via.placeholder.com/660x300/FFF/0f69b4?text=Imagen+no+disponible" alt="{{ $noticia->titulo_noticia }}">
            @else
                <img src="{{ asset('assets/media/noticias/portada/' . $noticia->portada_noticia) }}" alt="{{ $noticia->titulo_noticia }}" id="imgSize">
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
            <div class="contenido link-texto">
                <p>{!! $noticia->contenido_noticia !!} </p>
            </div>
        </div>


        {{-- Sección VIDEOSOCIAL--}}
        @if ( count($noticia->video) > 0 )
            @foreach ( $noticia->video as $video )
                <div class="texto row justify-content-center p-0 mb-3">
                    {!! $video->video_noticia !!}
                </div>
            @endforeach
        @endif

        <div class="clearfix"></div>

        {{-- Sección HASHTAG --}}
        @if ( count($noticia->hashtag) > 0 )
            <div class="texto row justify-content-center p-0 m-0">
                @foreach ( $noticia->hashtag as $hashtag )
                    <a
                        href="https://www.facebook.com/hashtag/{{ $hashtag->titulo_busqueda_hashtag }}"
                        class="badge badge-pill badge-secondary pt-3 pb-3 pr-4 pl-4 opensans mr-2 mt-2"
                        target="_blank"
                        style="font-size: 12px;"
                    >
                        {{ $hashtag->titulo_hashtag }}
                    </a>
                @endforeach
            </div>
        @endif


       <div class="texto text-center"><hr /><br />

           @if ( count($noticia->social) > 0)
               <a href="{{ route('noticias.index') }}" class="btn btn-sm btn-danger text-center" style="font-size: 15px;">&laquo; Ver más noticias</a>
               @foreach ( $noticia->social as $social )
                   <a href="{{ $social->link_socialnoticia }}" target="_blank" class="btn btn-social btn-sm btn-{{ \Illuminate\Support\Str::lower($social->redsocial->red_social) }}" style="color: #ffffff;">
                       <span class="fa fa-{{ \Illuminate\Support\Str::lower($social->redsocial->red_social) }}" style="line-height: 28px;"></span> Ver en {{ $social->redsocial->red_social }}
                   </a>
               @endforeach

           @else
               <a href="{{ route('noticias.index') }}" class="btn btn-danger text-center" style="font-size: 15px;">&laquo; Ver más noticias</a>
           @endif
       </div>
    </div>


@endsection



@push('adicional')
    <?php $galerianoticia = $noticia->galerianoticia; ?>
    @if ( count($galerianoticia) > 0 )
        <div class="clearfix"></div>

        <div class="stream">
            <div class="post">
                <div class="contenido">
                    <div class="texto">
                        <h3 class="title">Galeria de imágenes</h3>

                        <div class="container">
                            <div class="row">

                                @foreach ($galerianoticia->sortBy('created_at') as $galeria)
                                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                                        <a href="{{ asset('assets/media/noticias/galeria/' . $galeria->imagen_galerianot) }}" class="fancybox" rel="ligthbox">
                                            <img src="{{ asset('assets/media/noticias/galeria/' . $galeria->imagen_galerianot) }}" class="zoom img-fluid"  alt="">
                                        </a>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endif
@endpush

