@extends('layouts.estructura-inicial')

@section('title', 'CAJTA | Quienes Somos')

@push('breadcrumbs')
<li>Quiénes somos</li>
<li class="sep">/</li>
<li>Resumen</li>
@endpush

@push('styles')
<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap-social.css') }}">
@endpush

@push('styles')
<link href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css" rel="stylesheet">
<style>
    .main .post .post-header-img2 {
        width: 100%;
        height: auto;
        min-height: 178px;
        padding: 105px 30px 30px;
        border: 5px solid #3977a6;
        margin: auto;
        background: url('{{ asset('assets/images/Headers/ley-karin-header.png') }}');
        background-repeat: no-repeat !important;
        background-size: cover !important;
        background-position-y: 50% !important;
    }

    .row .col-md-4 img {
        max-width: 70% !important;
        height: auto !important;
 
    }

    .fancybox-skin {
        background: #fff;
        padding: 15px;
        border-radius: 4px;
        box-shadow: 0 10px 25px rgba(0, 0, 0, 0.3);
    }
   
</style>
@endpush

@section('contenido')

<div class="post">

    <div class="post-header-img2"></div>

    <div class="clearfix"></div>

    <div class="texto">
        <div class="contenido">

            <h3 class="title text-center">¿Qué es la Ley Karin?</h3>

            <p class="text-justify opensans">La ley N°21.643 modifica el Código del Trabajo en materia de prevención,
                investigación y sanción del acoso laboral, sexual y violencia en el trabajo.</p>

            <p class="text-justify opensans">Establece diversas disposiciones que modifican e incorporan definiciones
                legales, añade medidas de prevención y resguardo en la materia y perfecciona los procedimientos de
                investigación, implementando y adecuando la normativa nacional a los parámetros establecidos en el
                recientemente ratificado Convenio N°190, Sobre la Violencia y el Acoso, de la Organización Internacional
                del Trabajo - OIT.</p>

            <div class="texto-separacion"></div>


            <h3 class="title text-center">Medidas que establece la Ley Karin</h3>

            <ul class="gobcl">
                <li class="text-justify py-3"><span class="text-bold">Incorpora nuevas definiciones legales y
                        perfecciona las existentes, </span>como son el acoso laboral, el acoso sexual, la violencia en
                    el trabajo ejercida por terceros ajenos a la relación laboral, y la no discriminación, además de
                    incorporar la perspectiva de género en las relaciones laborales de manera explícita en el Art. 2 del
                    Código del Trabajo.</li>
                <li class="text-justify py-3"><span class="text-bold">Se refuerza el rol de la Dirección del Trabajo
                        (DT) y de la Contraloría General de la República</span> en los correspondientes procedimientos
                    de investigación, con el objetivo de dar garantías a los y las denunciantes.</li>
                <li class="text-justify py-3"><span class="text-bold">Establece como obligación de las empresas y de los
                        órganos del Estado un protocolo de prevención del acoso laboral y/o sexual y la violencia en el
                        trabajo,</span> reforzando un enfoque preventivo el que estaba ausente en la regulación. Esto
                    debe realizarse bajo las directrices establecidas por la Superintendencia de Seguridad Social
                    (SUSESO).</li>
            </ul>

            <p class="text-justify opensans">Con todo, las empleadoras y los empleadores tendrán el deber de informar
                semestralmente los canales que mantiene la empresa para la recepción de denuncias sobre incumplimientos
                relativos a la prevención, investigación y sanción del acoso sexual, laboral y la violencia en el
                trabajo, así como las instancias estatales para denunciar cualquier incumplimiento a la normativa
                laboral y para acceder a las prestaciones en materia de seguridad social.</p>

            <ul class="gobcl">
                <li class="text-justify">
                    <span class="text-bold">Establece nuevos estándares e incorpora modificaciones en los procesos de
                        denuncia, investigación y sanción</span> del acoso sexual, laboral y la violencia en el trabajo.
                </li>
            </ul>
        </div>

        <div class="contenido">
            <h3 class="title text-center">Afiches Informativos</h3>
            <div class="row gx-1 gy-4">
                @for ($i = 1; $i <= 5; $i++) <div class="col-md-4 col-sm-6 p-1 thumb">
                    <a href="{{ asset('assets/images/Afiche-Ley-Karin/afiche-0' . $i . '.png') }}"
                        data-toggle="lightbox" data-gallery="gallery" class="fancybox d-block">
                        <img src="{{ asset('assets/images/Afiche-Ley-Karin/afiche-0' . $i . '.png') }}"
                            class="zoom img-fluid w-100" alt="Afiche {{ $i }}">
                    </a>
            </div>
            @endfor
        </div>
    </div>

    <div class="texto-separacion"></div>
    <hr />
    <div class="texto-separacion"></div><br><br>

    <div class="text-center">
        <a href="{{ route('infoleyes.leykarin.normativa') }}" class="btn btn-danger py-3 px-4 opensans">
            <i class="fas fa-balance-scale"></i> Vea sobre la normativa legal vigente
        </a>
    </div>
</div>
</div>
<div class="clearfix"></div>
</div>

@endsection

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