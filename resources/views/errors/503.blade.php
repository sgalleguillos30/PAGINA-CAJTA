@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | 503
@endsection

@push('breadcrumbs')
    <li>Página en mantención</li>
@endpush

@section('contenido')

    <div class="post">

        <div class="texto">
            <div class="contenido">

                <div class="row mt-4">
                    <div class="col-md-3 col-sm-12 text-center"><i class="fas fa-tools fa-5x pr-3 blue"></i></div>
                    <div class="col-md-9 text-center">
                        <h3>Página en mantención.</h3>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <p>Lo sentimos, nuestra página web se encuentra recibiendo mejoras </p>
                    </div>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
