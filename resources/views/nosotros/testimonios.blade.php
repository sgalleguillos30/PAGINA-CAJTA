@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Quienes Somos
@endsection

@push('breadcrumbs')
    <li>Quiénes somos</li>
    <li class="sep">/</li>
    <li>Testimonios de Usuarios</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Quiénes Somos</h4>
            <h3>Testimonios de Usuarios</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title">Usuarios Región de Antofagasta</h3>
                <p>Testimonio de usuarios atendidos por CAJTA presentado en la Cuenta Pública Participativa 2016.</p>
                <div class="fb-video"
                     data-href="https://www.facebook.com/CAJTA/videos/1448190425228384/"
                     data-width="600"
                     data-allowfullscreen="true"
                     data-autoplay="false"
                     data-show-captions="true">
                </div>

                <div class="texto-separacion"></div>
                <div class="texto-separacion"></div>

                <h3 class="title">Usuarios Región de Tarapacá</h3>
                <p>Testimonio de usuarios atendidos por CAJTA presentado en la Cuenta Pública Participativa 2015.</p>
                <div class="fb-video"
                     data-href="https://www.facebook.com/CAJTA/videos/1118409031539860/"
                     data-width="600"
                     data-allowfullscreen="true"
                     data-autoplay="false"
                     data-show-captions="true">
                </div>


            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
