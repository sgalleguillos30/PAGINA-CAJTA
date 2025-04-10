@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Inscripción a Evento
@endsection

@push('breadcrumbs')
    <li>Inscripción a Evento</li>
@endpush

@section('contenido')


    <div class="post">
        <div class="post-header">
            <h4>Eventos</h4>
            <h3>Proceso de Inscripción</h3>
        </div>

        <div class="clearfix"></div>

        <div class="texto">
            {{--<h3 class="title">Llena el formulario</h3>--}}
            <div class="contenido link-texto">

                <iframe src="https://docs.google.com/forms/d/e/1FAIpQLSdmnHfPYBSHRdKKhmWRBSx4W2TXrI_9BxkKq6ASHgRmzyD1-Q/viewform?embedded=true" width="650" height="520" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>


                <div class="clearfix"></div>
            </div>
        </div>
    </div>

@endsection


@push('styles')
    <style>
        .main .post .texto {
            padding: 35px 0px 50px !important;
        }

        iframe {
            height: 2300px;
        }

        @media only screen and (max-width: 700px) {
            iframe {
                width: 320px;
                height: 2700px;
            }
        }
    </style>
@endpush
