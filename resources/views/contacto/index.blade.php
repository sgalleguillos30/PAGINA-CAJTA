@extends('layouts.estructura-inicial')

@section('title')
    CAJTA | Contacto
@endsection

@push('breadcrumbs')
    <li>Contacto</li>
@endpush

@section('contenido')

    <div class="post">
        <div class="post-header">
            <h4>Formulario</h4>
            <h3>Contacto</h3>
        </div>
        <div class="clearfix"></div>

        <div class="texto">
            <div class="contenido">

                <form
                    action="{{ route('contacto.contacto') }}"
                    class="form form-horizontal opensans"
                    method="POST"
                    autocomplete="off"
                    novalidate
                >
                    @csrf

                    <div class="col-md-12">
                        <p class="text-center">Todos los campos con asterisco (<span class="obligatorio">*</span>) son obligatorios.</p>

                        <div class="form-group">
                            <label for="txtRut" class="control-label col-md-3"><span class="obligatorio">* </span> RUT</label>
                            <input type="text" name="txtRut" id="txtRut" class="form-control col-md-9 mb-3{{ $errors->has('txtRut') ? ' is-invalid' : '' }}" value="{{ old('txtRut') ?: "" }}" {{ old('DiagCheck') ? "readonly" : "" }} placeholder="Formato: 12345678-9" required style="z-index: 10;" />

                            <div class="checkbox offset-md-3">
                                <label>
                                    <input type="checkbox" name="DiagCheck" id="DiagCheck" class="{{ $errors->has('DiagCheck') ? ' is-invalid' : '' }}" {{ old('DiagCheck') ? "checked" : "" }}> Soy extranjero(a) sin documento de identificación Chilena.
                                </label>
                            </div>

                            @if ($errors->has('txtRut'))
                                <span class="invalid-feedback offset-md-3 bold">{{ $errors->first('txtRut') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="txtNombre" class="control-label col-md-3"><span class="obligatorio">* </span> Nombres</label>
                            <input type="text" name="txtNombre" id="txtNombre" class="form-control col-md-9{{ $errors->has('txtNombre') ? ' is-invalid' : '' }}" value="{{ old('txtNombre') ?: "" }}" placeholder="Nombres" required />

                            @if ($errors->has('txtNombre'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtNombre') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="txtApellido1" class="control-label col-md-3"><span class="obligatorio">* </span> Apellidos</label>
                            <input type="text" name="txtApellido1" id="txtApellido1" class="form-control col-md-9{{ $errors->has('txtApellido1') ? ' is-invalid' : '' }}" value="{{ old('txtApellido1') ?: "" }}" placeholder="Primer apellido" required />

                            @if ($errors->has('txtApellido1'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtApellido1') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <input type="text" name="txtApellido2" id="txtApellido2" class="form-control offset-md-3 col-md-9{{ $errors->has('txtApellido2') ? ' is-invalid' : '' }}" value="{{ old('txtApellido2') ?: "" }}" placeholder="Segundo apellido" required />

                            @if ($errors->has('txtApellido2'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtApellido2') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="txtDireccion" class="control-label col-md-3"><span class="obligatorio">* </span> Dirección</label>
                            <input type="text" name="txtDireccion" id="txtDireccion" class="form-control col-md-9{{ $errors->has('txtDireccion') ? ' is-invalid' : '' }}" value="{{ old('txtDireccion') ?: "" }}" placeholder="Dirección y ciudad" required />

                            @if ($errors->has('txtDireccion'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtDireccion') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="txtMail" class="control-label col-md-3"><span class="obligatorio">* </span> Correo electrónico</label>
                            <input type="email" name="txtMail" id="txtMail" class="form-control col-md-9{{ $errors->has('txtMail') ? ' is-invalid' : '' }}" value="{{ old('txtMail') ?: "" }}" placeholder="Formato: correo@correo.cl" required />

                            @if ($errors->has('txtMail'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtMail') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="txtFono" class="control-label col-md-3">Teléfono contacto</label>
                            <input type="number" name="txtFono" id="txtFono" class="form-control col-md-9{{ $errors->has('txtFono') ? ' is-invalid' : '' }}" value="{{ old('txtFono') ?: "" }}" placeholder="Número fijo o celular (Solo números)" required />

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

                        <div class="form-group">
                            <label for="ciudad" class="control-label col-md-3"><span class="obligatorio">* </span> Ciudad</label>
                            <select
                                name="ciudad"
                                id="ciudad"
                                class="custom-select col-md-9{{ $errors->has('ciudad') ? ' is-invalid' : '' }}"
                            >
                                <option value="">Seleccione una opción</option>
                                @foreach (\App\Model\Ciudad::with('region')->get() as $ciudad)
                                    <option
                                        value="{{ $ciudad->id_ciudad }}"
                                        {{ (int) old('ciudad') === (int) $ciudad->id_ciudad ? 'selected' : '' }}
                                    >{{ $ciudad->ciudad }} ( {{ $ciudad->region->region }} )</option>
                                @endforeach
                            </select>

                            @if ($errors->has('ciudad'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('ciudad') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="unidad" class="control-label col-md-3">Centro de Atención</label>
                            <select
                                name="unidad"
                                id="unidad"
                                class="custom-select col-md-9{{ $errors->has('unidad') ? ' is-invalid' : '' }}"
                            >
                                <option value="">Seleccione una opción</option>
                                @foreach (\App\Model\Unidad::with('ciudad')->get() as $unidad)
                                    <option
                                        value="{{ $unidad->id_unidad }}"
                                        {{ (int) old('ciudad') === (int) $unidad->id_unidad ? 'selected' : '' }}
                                    >{{ $unidad->nombrecorto_unidad }} ( {{ $unidad->direccion_unidad}}, {{ $unidad->ciudad->ciudad }} )</option>
                                @endforeach
                            </select>

                            @if ($errors->has('unidad'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('unidad') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="tipo_respuesta" class="control-label col-md-3"><span class="obligatorio">* </span> Forma de Respuesta</label>
                            <select
                                name="tipo_respuesta"
                                id="tipo_respuesta"
                                class="custom-select col-md-9{{ $errors->has('tipo_respuesta') ? ' is-invalid' : '' }}"
                            >
                                <option value="">Seleccione una opción</option>
                                @foreach (\App\Model\TipoRespuesta::pluck('tipo_respuesta', 'id_tiporespuesta') as $id => $tipo_respuesta)
                                    <option
                                        value="{{ $id }}"
                                        {{ (int) old('tipo_respuesta') === $id ? 'selected' : '' }}
                                    >{{ $tipo_respuesta }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('tipo_respuesta'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('tipo_respuesta') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="tipo_mensaje" class="control-label col-md-3"><span class="obligatorio">* </span> Tipo de Mensaje</label>
                            <select
                                name="tipo_mensaje"
                                id="tipo_mensaje"
                                class="custom-select col-md-9{{ $errors->has('tipo_mensaje') ? ' is-invalid' : '' }}"
                            >
                                <option value="">Seleccione una opción</option>
                                @foreach (\App\Model\TipoMensaje::pluck('tipo_mensaje', 'id_tipomensaje') as $id => $tipo_mensaje)
                                    <option
                                        value="{{ $id }}"
                                        {{ (int) old('tipo_mensaje') === $id ? 'selected' : '' }}
                                    >{{ $tipo_mensaje }}</option>
                                @endforeach
                            </select>

                            @if ($errors->has('tipo_mensaje'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('tipo_mensaje') }}</span>
                            @endif
                        </div>

                        <div class="form-group mb-5">
                            <label for="txtMensaje" class="control-label col-md-3"><span class="obligatorio">* </span> Mensaje</label>
                            <textarea class="form-control col-md-9{{ $errors->has('txtMensaje') ? ' is-invalid' : '' }}" id="txtMensaje" name="txtMensaje" rows="6">{{ old('txtMensaje') ?: "" }}</textarea>

                            @if ($errors->has('txtMensaje'))
                                <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtMensaje') }}</span>
                            @endif
                        </div><hr />

                        <div class="form-group">
                            <div class="col-sm-12">
                                <div class="checkbox justify">
                                    <label>
                                        <input type="checkbox" name="confirmCheck" id="confirmCheck">Declaro haber leído el formulario precedente y estar en conocimiento de los derechos y deberes que como ciudadano me asisten, de manera que me hago responsable de la veracidad de la información aquí entregada.
                                    </label>
                                    @if ($errors->has('confirmCheck'))
                                        <span class="invalid-feedback bold" style="display: block;">{{ $errors->first('confirmCheck') }}</span>
                                    @endif
                                </div>
                            </div>
                        </div><hr />

                        <div class="form-group mt-4 mb-5">
                            <div class="col-sm-offset-3 col-sm-9">
                                <input type="submit" class="btn btn-danger" id="btnMensaje" value="Enviar Mensaje" disabled="disabled"> &nbsp;&nbsp;
                                <a href="{{ route('contacto.index') }}" class="btn btn-offset-default">Cancelar</a>
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
