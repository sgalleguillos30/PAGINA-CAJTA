<h3 class="titleborder pt-5 text-justify"><span class="bold">Parte 2:</span><br /> Los datos de la persona con quién necesitas llevar el proceso de mediación</h3>

<div class="form-group">
    <label for="txtRut_p2" class="control-label col-md-3">RUT</label>
    <input type="text" name="txtRut_p2" id="txtRut_p2" class="form-control col-md-9 mb-3{{ $errors->has('txtRut_p2') ? ' is-invalid' : '' }}" value="{{ old('txtRut_p2') ?: "" }}" {{ old('DiagCheck_p2') ? "readonly" : "" }} placeholder="Formato: 12345678-9" required style="z-index: 10;" />

    <div class="checkbox offset-md-3">
        <label>
            <input type="checkbox" name="DiagCheck_p2" id="DiagCheck_p2" class="{{ $errors->has('DiagCheck_p2') ? ' is-invalid' : '' }}" {{ old('DiagCheck_p2') ? "checked" : "" }}> Soy extranjero(a) sin documento de identificación Chilena.
        </label>
    </div>

    @if ($errors->has('txtRut_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtRut_p2') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtNombre_p2" class="control-label col-md-3"><span class="obligatorio">* </span> Nombres</label>
    <input type="text" name="txtNombre_p2" id="txtNombre_p2" class="form-control col-md-9{{ $errors->has('txtNombre_p2') ? ' is-invalid' : '' }}" value="{{ old('txtNombre_p2') ?: "" }}" placeholder="Nombres" required />

    @if ($errors->has('txtNombre_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtNombre_p2') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtApellido1_p2" class="control-label col-md-3"><span class="obligatorio">* </span> Apellidos</label>
    <input type="text" name="txtApellido1_p2" id="txtApellido1_p2" class="form-control col-md-9{{ $errors->has('txtApellido1_p2') ? ' is-invalid' : '' }}" value="{{ old('txtApellido1_p2') ?: "" }}" placeholder="Primer apellido" required />

    @if ($errors->has('txtApellido1_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtApellido1_p2') }}</span>
    @endif
</div>


<div class="form-group">
    <input type="text" name="txtApellido2_p2" id="txtApellido2_p2" class="form-control offset-md-3 col-md-9{{ $errors->has('txtApellido2_p2') ? ' is-invalid' : '' }}" value="{{ old('txtApellido2_p2') ?: "" }}" placeholder="Segundo apellido" required />

    @if ($errors->has('txtApellido2_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtApellido2_p2') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtFnac_p2" class="control-label col-md-3">Fecha de nacimiento</label>
    <input type="text" name="txtFnac_p2" id="txtFnac_p2" class="form-control col-md-9{{ $errors->has('txtFnac_p2') ? ' is-invalid' : '' }}" value="{{ old('txtFnac_p2') ?: "" }}" placeholder="Formato: DD-MM-AAAA" required />

    @if ($errors->has('txtFnac_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtFnac_p2') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="sexo_p2" class="control-label col-md-3">Sexo</label>
    <select
        name="sexo_p2"
        id="sexo_p2"
        class="custom-select col-md-9{{ $errors->has('sexo_p2') ? ' is-invalid' : '' }}"
    >
        <option value="">Seleccione una opción</option>
        @foreach ($listaSexo as $id => $sexo)
            <option value="{{ $id }}" {{ (int) old('sexo_p2') === $id ? 'selected' : '' }}>
                {{ \Illuminate\Support\Str::upper($sexo) }}
            </option>
        @endforeach
    </select>

    @if ($errors->has('sexo_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('sexo_p2') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="ecivil_p2" class="control-label col-md-3">Estado Civil</label>
    <select
        name="ecivil_p2"
        id="ecivil_p2"
        class="custom-select col-md-9{{ $errors->has('ecivil_p2') ? ' is-invalid' : '' }}"
    >
        <option value="">Seleccione una opción</option>
        @foreach ($listaEstadoCivil as $id => $ecivil_p2)
            <option value="{{ $id }}" {{ (int) old('ecivil_p2') === $id ? 'selected' : '' }}>
                {{ \Illuminate\Support\Str::upper($ecivil_p2) }}
            </option>
        @endforeach
    </select>

    @if ($errors->has('ecivil_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('ecivil_p2') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="nacionalidad_p2" class="control-label col-md-3">Nacionalidad</label>
    <select
        name="nacionalidad_p2"
        id="nacionalidad_p2"
        class="custom-select col-md-9{{ $errors->has('nacionalidad_p2') ? ' is-invalid' : '' }}"
    >
        <option value="">Seleccione una opción</option>
        @foreach ($listaNacionalidad as $id => $nacionalidad_p2)
            <option value="{{ $id }}" {{ (int) old('nacionalidad_p2') === $id ? 'selected' : '' }}>
                {{ \Illuminate\Support\Str::upper($nacionalidad_p2) }}
            </option>
        @endforeach
    </select>

    @if ($errors->has('nacionalidad_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('nacionalidad_p2') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtDireccion_p2" class="control-label col-md-3">Dirección</label>
    <input type="text" name="txtDireccion_p2" id="txtDireccion_p2" class="form-control col-md-9{{ $errors->has('txtDireccion_p2') ? ' is-invalid' : '' }}" value="{{ old('txtDireccion_p2') ?: "" }}" placeholder="Dirección y ciudad" required />

    @if ($errors->has('txtDireccion_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtDireccion_p2') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="comuna_p2" class="control-label col-md-3">Comuna</label>
    <select
        name="comuna_p2"
        id="comuna_p2"
        class="custom-select col-md-9{{ $errors->has('comuna_p2') ? ' is-invalid' : '' }}"
    >
        <option value="">Seleccione una opción</option>
        @foreach ($listacomuna as $comuna)
            <option value="{{ $comuna->id_comuna }}" {{ (int) old('comuna_p2') === $comuna->id_comuna ? 'selected' : '' }}>
                {{ \Illuminate\Support\Str::upper($comuna->comuna) }}
            </option>
        @endforeach
    </select>

    @if ($errors->has('comuna_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('comuna_p2') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtMail_p2" class="control-label col-md-3">Correo electrónico</label>
    <input type="email" name="txtMail_p2" id="txtMail_p2" class="form-control col-md-9{{ $errors->has('txtMail_p2') ? ' is-invalid' : '' }}" value="{{ old('txtMail_p2') ?: "" }}" placeholder="Formato: correo@correo.cl" required />

    @if ($errors->has('txtMail_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtMail_p2') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtFono1_p2" class="control-label col-md-3"><span class="obligatorio">* </span> Teléfono contacto</label>
    <input type="number" name="txtFono1_p2" id="txtFono1_p2" class="form-control col-md-9{{ $errors->has('txtFono1_p2') ? ' is-invalid' : '' }}" value="{{ old('txtFono1_p2') ?: "" }}" placeholder="Número fijo o celular (Solo números)" required />

    @if ($errors->has('txtFono1_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtFono1_p2') }}</span>
    @endif
</div>


<div class="form-group mb-5 pb-5">
    <input type="text" name="txtFono2_p2" id="txtFono2_p2" class="form-control offset-md-3 col-md-9{{ $errors->has('txtFono2_p2') ? ' is-invalid' : '' }}" value="{{ old('txtFono2_p2') ?: "" }}" placeholder="Número fijo o celular (Solo números)" required />

    @if ($errors->has('txtFono2_p2'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtFono2_p2') }}</span>
    @endif
</div>
