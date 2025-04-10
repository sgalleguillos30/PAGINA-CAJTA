@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Quienes Somos
@endsection

@push('breadcrumbs')
    <li>Quiénes somos</li>
    <li class="sep">/</li>
    <li>Postulantes</li>
    <li class="sep">/</li>
    <li>Solicitud</li>
@endpush

@php
    $unidad = \App\Model\Unidad::join('region', 'region.id_region', '=', 'unidad.id_region')
                            ->orderBy('region.numero_reg')
                            ->orderBy('unidad.id_region')
                            ->get();
    $unidadexterna = \App\Model\FPostulantesCertUnidadExterna::all();
@endphp

@section('contenido')

    <div class="post mb-4">
        <div class="post-header">
            <h4>Quiénes Somos</h4>
            <h3>Postulantes</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                @include('layouts.fijos.messages-flash-box')

                @if ( session('message'))
                    <div class="texto-separacion"></div>
                @endif

                <h3 class="title">Solicitud de Certificado Práctica Profesional<br /> Estudiantes de Derecho</h3>

                <p class="text-justify">Respecto de los certificados originales emitidos antes del año 2018, debe completar el siguiente formulario. <span class="text-bold">(Los con posterioridad al 2018 deben ser solicitados directamente en la Direcciones Regionales respectivas)</span>.</p>
                <p class="text-justify">Para ello deberá completar el siguiente formulario, el plazo de entrega en Tarapacá donde se emiten es de 10 días hábiles y en las demás regiones 15 días hábiles, ya que deben ser despachos a las oficinas de la Dirección Regional respectiva, de Lunes a jueves  09.00 a 14.00 horas.
                </p>
                <p class="text-justify">El retiro del documento es personal, presentando su cédula de identidad, en el caso de que sea retirado por un tercero, debe acompañar fotocopia simple de cédula de identidad con autorización simple del requirente. Se debe dejar copia al momento de la entrega.</p>

                <p class="text-bold">DATOS POR REGIÓN PARA RETIRO:</p>

                <div class="table-responsive">
                    <table class="table table-bordered opensans">
                        <thead class="bg-primary text-white">
                            <tr class="text-center">
                                <th>REGIÓN</th>
                                <th>DATOS</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="align-middle text-center text-bold">ARICA Y PARINACOTA</td>
                                <td class="pb-0">
                                    <ul class="list-unstyled pb-0 mb-0">
                                        <li><span class="text-bold">Dirección:</span> Adrián Zúñiga 812, Arica</li>
                                        <li><span class="text-bold">Correo:</span> <a class="text-bold" href="mailto:direccionreg.arica@cajta.cl">direccionreg.arica@cajta.cl</a></li>
                                        <li>
                                            <span class="text-bold">Teléfonos: </span>
                                            <ul class="list-unstyled mb-2 pb-2">
                                                <li>582 594 511</li>
                                                <li>582 594 639</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-bold">TARAPACÁ</td>
                                <td class="pb-0">
                                    <ul class="list-unstyled pb-0 mb-0">
                                        <li><span class="text-bold">Dirección:</span> Calle Plaza Prat 570, Iquique</li>
                                        <li><span class="text-bold">Correo:</span> <a class="text-bold" href="mailto:dirgen@cajta.cl">dirgen@cajta.cl</a></li>
                                        <li>
                                            <span class="text-bold">Teléfonos: </span>
                                            <ul class="list-unstyled mb-2 pb-2">
                                                <li>572 532 160</li>
                                                <li>572 532 162</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td class="align-middle text-center text-bold">ANTOFAGASTA</td>
                                <td class="pb-0">
                                    <ul class="list-unstyled pb-2 mb-2">
                                        <li><span class="text-bold">Dirección:</span> Av. Grecia 2032, Piso 3, Antofagasta</li>
                                        <li><span class="text-bold">Correo:</span> <a class="text-bold" href="mailto:direccionreg.antofagasta@cajta.cl">direccionreg.antofagasta@cajta.cl</a></li>
                                        <li><span class="text-bold">Teléfono: </span> 552 590 702</li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="texto-separacion"></div>


                {{-- <div class="embed-responsive" style="height: 2000px">
                    <iframe class="embed-responsive-item" src="https://docs.google.com/forms/d/e/1FAIpQLSf_LvqzIbvF-r7f3lTRC6mqYOBSufk_z0T88HK0nDFohx1yeQ/viewform?embedded=true" width="620" height="1429" frameborder="0" marginheight="0" marginwidth="0">Cargando…</iframe>
                </div> --}}

                <form
                    action="{{ route('nosotros.postulantes.postsolicitud') }}"
                    class="form form-horizontal opensans"
                    method="POST"
                    autocomplete="off"
                    novalidate
                >
                    @csrf

                    <div class="col-md-12">
                        <p class="text-center">Completa el siguiente formulario para solicitar tu certificado.<br />Todos los campos con asterisco (<span class="obligatorio">*</span>) son obligatorios.</p>



                        <div class="texto-separacion"></div>

                        <h3 class="titleborder"><span class="bold">Parte 1:</span> Tus Datos</h3>

                        <div class="form-group">
                            <label for="txtRut" class="control-label col-md-3"><span class="obligatorio">* </span> RUT</label>
                            <input 
                                type="text" 
                                name="txtRut" 
                                id="txtRut" 
                                class="form-control col-md-9{{ $errors->has('txtRut') ? ' is-invalid' : '' }}" 
                                value="{{ old('txtRut') ?: "" }}" 
                                placeholder="Formato: 12345678-9" 
                                style="z-index: 10;" 
                                required 
                                />

                            @if ($errors->has('txtRut'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtRut') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="txtNombre" class="control-label col-md-3"><span class="obligatorio">* </span> Nombres</label>
                            <input 
                                type="text" 
                                name="txtNombre" 
                                id="txtNombre" 
                                class="form-control col-md-9{{ $errors->has('txtNombre') ? ' is-invalid' : '' }}" 
                                value="{{ old('txtNombre') ?: "" }}" 
                                placeholder="Nombres" 
                                required 
                                />

                            @if ($errors->has('txtNombre'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtNombre') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="txtApellido1" class="control-label col-md-3"><span class="obligatorio">* </span> Apellidos</label>
                            <input 
                                type="text" 
                                name="txtApellido1" id="txtApellido1" 
                                class="form-control col-md-9{{ $errors->has('txtApellido1') ? ' is-invalid' : '' }}" 
                                value="{{ old('txtApellido1') ?: "" }}" 
                                placeholder="Primer apellido" 
                                required 
                                />

                            @if ($errors->has('txtApellido1'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtApellido1') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input 
                                type="text" 
                                name="txtApellido2" 
                                id="txtApellido2" 
                                class="form-control offset-md-3 col-md-9{{ $errors->has('txtApellido2') ? ' is-invalid' : '' }}" 
                                value="{{ old('txtApellido2') ?: "" }}" 
                                placeholder="Segundo apellido" 
                                />

                            @if ($errors->has('txtApellido2'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtApellido2') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="txtMail" class="control-label col-md-3"><span class="obligatorio">* </span> Correo electrónico</label>
                            <input 
                                type="email" 
                                name="txtMail" 
                                id="txtMail" 
                                class="form-control col-md-9{{ $errors->has('txtMail') ? ' is-invalid' : '' }}" 
                                value="{{ old('txtMail') ?: "" }}" 
                                placeholder="Formato: correo@correo.cl" 
                                required 
                                />

                            @if ($errors->has('txtMail'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtMail') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="txtFono" class="control-label col-md-3">Teléfono contacto</label>
                            <input 
                                type="number" 
                                name="txtFono" 
                                id="txtFono" 
                                class="form-control col-md-9{{ $errors->has('txtFono') ? ' is-invalid' : '' }}" 
                                value="{{ old('txtFono') ?: "" }}" 
                                placeholder="Número fijo o celular (Solo números)" 
                                />

                            @if ($errors->has('txtFono'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtFono') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="sexo" class="control-label col-md-3"><span class="obligatorio">* </span> Sexo</label>
                            <select
                                name="sexo"
                                id="sexo"
                                class="custom-select col-md-9{{ $errors->has('sexo') ? ' is-invalid' : '' }}"
                            >
                                <option value="">Seleccione una opción</option>
                                @foreach (\App\Model\Sexo::pluck('sexo', 'id_sexo') as $id => $sexo)
                                    <option
                                        value="{{ $id }}"
                                        {{ (int) old('sexo') === $id ? 'selected' : '' }}
                                    >{{ $sexo }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('sexo'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('sexo') }}</span>
                            @endif
                        </div>


                        <div class="texto-separacion"></div>


                        <h3 class="titleborder"><span class="bold">Parte 2:</span> Antecedentes donde realizaste tu práctica profesional</h3>

                        <p>Seleccione la unidad donde realizó su práctica profesional. Estas están separadas en unidades CAJTA y las externas a ella, por lo que deberá seleccionar una opción o la otra, pero no ambas.</p>
                        <p>Respecto de la fecha estimada que realizó su práctica profesional importa el mes y año.</p>

                        <div class="form-group">
                            <label for="unidad" class="control-label col-md-3"><span class="obligatorio">* </span> Unidad CAJTA</label>
                            <select
                                name="unidad"
                                id="unidad"
                                class="custom-select col-md-9{{ $errors->has('unidad') ? ' is-invalid' : '' }}"
                            >
                                <option value="">Seleccione una opción</option>
                                @foreach ($unidad as $un)
                                    <option
                                        value="{{ $un->id_unidad }}"
                                        {{ (int) old('unidad') === (int) $un->id_unidad ? 'selected' : '' }}
                                    >
                                        [{{ str_replace('Región de ', '', $un->region) }}] {{ $un->nombre_unidad }}
                                    </option>
                                @endforeach
                            </select>

                            @if ($errors->has('unidad'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('unidad') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="unidad_externa" class="control-label col-md-3"><span class="obligatorio">* </span> Unidad externa</label>
                            <select
                                name="unidad_externa"
                                id="unidad_externa"
                                class="custom-select col-md-9{{ $errors->has('unidad_externa') ? ' is-invalid' : '' }}"
                            >
                                <option value="">Seleccione una opción</option>
                                @foreach ($unidadexterna as $un)
                                    <option
                                        value="{{ $un->id }}"
                                        {{ (int) old('unidad_externa') === (int) $un->id ? 'selected' : '' }}
                                    >
                                        {{ $un->unidad_externa }}
                                    </option>
                                @endforeach
                            </select>

                            @if ($errors->has('unidad_externa'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('unidad_externa') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="txtFechaEstimada" class="control-label col-md-3"><span class="obligatorio">* </span> Fecha estimada</label>
                            <input 
                                type="date" 
                                name="txtFechaEstimada" 
                                id="txtFechaEstimada" 
                                class="form-control col-md-9{{ $errors->has('txtFechaEstimada') ? ' is-invalid' : '' }}" 
                                value="{{ old('txtFechaEstimada') ?: "" }}" 
                                placeholder="Formato: 12345678-9" 
                                style="z-index: 10;" 
                                required 
                                />

                            @if ($errors->has('txtFechaEstimada'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtFechaEstimada') }}</span>
                            @endif
                        </div><hr />

                        <div class="form-group mt-4 mb-5">
                            <div class="col-sm-offset-3 col-sm-9">
                                <input type="submit" class="btn btn-danger" id="btnMensaje" value="Enviar solicitud"> &nbsp;&nbsp;
                                <a href="{{ route('nosotros.postulantes') }}" class="btn btn-offset-default">Cancelar</a>
                            </div>
                        </div>

                    </div>

                </form>
                

            </div>
        </div>
        <div class="clearfix"></div>
    </div>

@endsection
