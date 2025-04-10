@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | 404
@endsection

@push('breadcrumbs')
    <li>Página no encontrada</li>
@endpush

@section('contenido')

    <div class="post">

        <div class="texto">
            <div class="contenido">

                <div class="row mt-4">
                    <div class="col-md-3 col-sm-12 text-center"><i class="fas fa-search fa-5x pr-3 blue"></i></div>
                    <div class="col-md-9 text-center">
                        <h3>La página que buscas no existe o no se ha encontrado.</h3>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-12">
                        <p>Lo sentimos, la página que buscas no existe.<br />Puedes probar de nuevo volviendo al <a class="opensans blue bold"
                                href="{{ route('home') }}">inicio</a>, o realizar una búsqueda en nuestro archivo de noticias:</p>

                        <form
                            action="{{ route('home.buscar') }}"
                            class="form opensans"
                            method="POST"
                            autocomplete="off"
                            novalidate
                        >
                            @csrf


                            <div class="form-group row">
                                <label for="query" class="control-label col-md-3"><span class="obligatorio">* </span> Buscar noticias:</label>
                                <input type="text" name="query" id="query" class="form-control col-md-9{{ $errors->has('query') ? ' is-invalid' : '' }}" value="{{ old('query') ?: "" }}" placeholder="Título noticia o contenido" required />

                                @if ($errors->has('query'))
                                    <span class="invalid-feedback offset-md-3 text-strong">{{ $errors->first('query') }}</span>
                                @endif
                            </div>

                            <div class="mt-4 mb-5">
                                {{--<button type="submit" class="btn btn-danger offset-3 col-md-3"><i class="fas fa-search"></i> &nbsp; Buscar</button>--}}
                                <input type="submit" class="btn btn-danger offset-3 col-md-3" value="Buscar">
                            </div>
                            <div class="clearfix"></div>

                        </form>
                    </div>
                </div>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
