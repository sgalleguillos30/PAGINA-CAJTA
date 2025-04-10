@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Intranet
@endsection

@push('breadcrumbs')
    <li>Subida archivos</li>
@endpush

@section('contenido')

    <div class="post">
        <div class="post-header">
            <h4>Intranet</h4>
            <h3>Subir imagen portada</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <h3 class="title">Subir imagen de portada a noticia</h3>

                @include('layouts.fijos.messages-flash-box')

                <p>Se subirá un archivo que tiene por título de portada &quot;<span class="text-bold">{{ $noticia->titulo_noticia }}</span>&quot;.</p>
                <p>Si esta noticia ya cuenta con una imagen de portada, esta se sobreescribirá.</p><br /><hr /><br />

                <form
                    action="{{ route('intranet.noticias.postnoticia', ['noticia' => $noticia->id_noticia]) }}"
                    class="form opensans"
                    method="POST"
                    autocomplete="off"
                    enctype="multipart/form-data"
                    novalidate
                >
                    @csrf

                    <div class="col-md-12">
                        <p class="text-center">Todos los campos con asterisco (<span class="obligatorio">*</span>) son obligatorios.</p>

                        <div class="form-group row">
                            <label for="inputFile" class="control-label col-md-2"><span class="obligatorio">* </span> Imagen</label>
                            <div class="custom-file col-md-10">
                                <input
                                    type="file"
                                    class="custom-file-input{{ $errors->has('inputFile') ? ' is-invalid' : '' }}"
                                    id="inputFile"
                                    name="inputFile"
                                />
                                <label class="custom-file-label inputFile" for="inputFile">Formato: JPG, JPEG o PNG.</label>

                                @if ($errors->has('inputFile'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('inputFile') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <small class="form-text text-muted pt-4 offset-md-2">
                                <ul>
                                    <li>La imagen debe ser de formatos: JPG, JPEG o PNG.</li>
                                    <li>El peso del archivo <span class="text-bold">NO</span> debe superar los 4MB</li>
                                </ul>
                            </small>
                        </div>

                        <div class="form-group row mt-4 mb-5">
                            <div class="col-sm-offset-3 col-sm-9">
                                <input type="submit" class="btn btn-danger" id="btnMensaje" value="Subir archivo"> &nbsp;&nbsp;
                                <a href="{{ route('home') }}" class="btn btn-offset-default">Cancelar</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>


                    </div>
                </form>

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
