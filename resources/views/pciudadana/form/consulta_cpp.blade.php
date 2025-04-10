<div class="row mt-3 pt-3">
    <div class="col-md-12">
        @include('layouts.fijos.messages-flash-box')

        <h4 class="titleborder text-center">Déjanos tu comentario</h4>

        <p class="text-justify">Para nuestra institución es importante su opinión, y en consideración a ello consultamos qué temática le parece relevante incorporar en nuestra Cuenta Pública 2023 y  cuál es su opinión respecto a nuestra institución. <br />Para ello se solicita llenar el siguiente cuestionario, porque su voz es fundamental para CAJTA.</p>
        {{-- <p class="text-justify">Si has leído el documento o participaste de nuestra Cuenta Pública Participativa, déjanos tu comentario, felicitaciones, reclamo o sugerencia. Tu opinión es importante para nosotros.</p> --}}

        <div class="col-md-12">

            <form
                action="{{ route('pciudadana.cpp') }}"
                class="form-horizontal"
                method="POST"
                autocomplete="off"
                novalidate
            >
                @csrf

                <p class="text-center bold">Todos los campos con asterisco (<span class="obligatorio">*</span>) son obligatorios.</p>

                <div class="form-group">
                    <label for="txtRut" class="control-label col-md-3"><span class="obligatorio">* </span> RUT</label>
                    <input type="text" name="txtRut" id="txtRut" class="form-control col-md-9 mb-3{{ $errors->has('txtRut') ? ' is-invalid' : '' }}" value="{{ old('txtRut') ?: "" }}" {{ old('DiagCheck') ? "readonly" : "" }} placeholder="Formato: 12345678-9" required style="z-index: 10;" />

                    <div class="checkbox offset-md-3">
                        <label>
                            <input type="checkbox" name="DiagCheck" id="DiagCheck" class="{{ $errors->has('DiagCheck') ? ' is-invalid' : '' }}" {{ old('DiagCheck') ? "checked" : "" }}> Soy extranjero(a) sin documento de identificación Chilena.
                        </label>
                    </div>

                    @if ($errors->has('txtRut'))
                        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtRut') }}</span>
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

                <div class="form-group mb-5">
                    <label for="txtMensaje" class="control-label col-md-3"><span class="obligatorio">* </span> Mensaje</label>
                    <textarea class="form-control col-md-9{{ $errors->has('txtMensaje') ? ' is-invalid' : '' }}" id="txtMensaje" name="txtMensaje" rows="6">{{ old('txtMensaje') ?: "" }}</textarea>

                    @if ($errors->has('txtMensaje'))
                        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtMensaje') }}</span>
                    @endif
                </div>


                <div class="form-group mb-5">
                    <div class="col-sm-offset-3 col-sm-9">
                        <input type="submit" class="btn btn-danger" id="btnMensaje" value="Enviar Mensaje"> &nbsp;&nbsp;
                        <a href="{{ route('home') }}" class="btn btn-offset-default">Cancelar</a>
                    </div>
                </div>
                <div class="clearfix"></div>


            </form>
        </div>

    </div>
</div><hr />
