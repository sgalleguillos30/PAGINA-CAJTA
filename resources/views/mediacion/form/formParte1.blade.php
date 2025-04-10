<h3 class="titleborder"><span class="bold">Parte 1:</span> Tus Datos</h3>

<div class="form-group">
    <label for="txtRut_p1" class="control-label col-md-3"><span class="obligatorio">* </span> RUT</label>
    <input type="text" name="txtRut_p1" id="txtRut_p1" class="form-control col-md-9 mb-3{{ $errors->has('txtRut_p1') ? ' is-invalid' : '' }}" value="{{ old('txtRut_p1') ?: "" }}" {{ old('DiagCheck_p1') ? "readonly" : "" }} placeholder="Formato: 12345678-9" required style="z-index: 10;" />

    <div class="checkbox offset-md-3">
        <label>
            <input type="checkbox" name="DiagCheck_p1" id="DiagCheck_p1" class="{{ $errors->has('DiagCheck_p1') ? ' is-invalid' : '' }}" {{ old('DiagCheck_p1') ? "checked" : "" }}> Soy extranjero(a) sin documento de identificación Chilena.
        </label>
    </div>

    @if ($errors->has('txtRut_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtRut_p1') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtNombre_p1" class="control-label col-md-3"><span class="obligatorio">* </span> Nombres</label>
    <input type="text" name="txtNombre_p1" id="txtNombre_p1" class="form-control col-md-9{{ $errors->has('txtNombre_p1') ? ' is-invalid' : '' }}" value="{{ old('txtNombre_p1') ?: "" }}" placeholder="Nombres" required />

    @if ($errors->has('txtNombre_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtNombre_p1') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtApellido1_p1" class="control-label col-md-3"><span class="obligatorio">* </span> Apellidos</label>
    <input type="text" name="txtApellido1_p1" id="txtApellido1_p1" class="form-control col-md-9{{ $errors->has('txtApellido1_p1') ? ' is-invalid' : '' }}" value="{{ old('txtApellido1_p1') ?: "" }}" placeholder="Primer apellido" required />

    @if ($errors->has('txtApellido1_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtApellido1_p1') }}</span>
    @endif
</div>


<div class="form-group">
    <input type="text" name="txtApellido2_p1" id="txtApellido2_p1" class="form-control offset-md-3 col-md-9{{ $errors->has('txtApellido2_p1') ? ' is-invalid' : '' }}" value="{{ old('txtApellido2_p1') ?: "" }}" placeholder="Segundo apellido" required />

    @if ($errors->has('txtApellido2_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtApellido2_p1') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtFnac_p1" class="control-label col-md-3">Fecha de nacimiento</label>
    <input type="text" name="txtFnac_p1" id="txtFnac_p1" class="form-control col-md-9{{ $errors->has('txtFnac_p1') ? ' is-invalid' : '' }}" value="{{ old('txtFnac_p1') ?: "" }}" placeholder="Formato: DD-MM-AAAA" required />

    @if ($errors->has('txtFnac_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtFnac_p1') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="sexo_p1" class="control-label col-md-3">Sexo</label>
    <select
        name="sexo_p1"
        id="sexo_p1"
        class="custom-select col-md-9{{ $errors->has('sexo_p1') ? ' is-invalid' : '' }}"
    >
        <option value="">Seleccione una opción</option>
        @foreach ($listaSexo as $id => $sexo)
            <option value="{{ $id }}" {{ (int) old('sexo_p1') === $id ? 'selected' : '' }}>
                {{ \Illuminate\Support\Str::upper($sexo) }}
            </option>
        @endforeach
    </select>

    @if ($errors->has('sexo_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('sexo_p1') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="ecivil_p1" class="control-label col-md-3">Estado Civil</label>
    <select
        name="ecivil_p1"
        id="ecivil_p1"
        class="custom-select col-md-9{{ $errors->has('ecivil_p1') ? ' is-invalid' : '' }}"
    >
        <option value="">Seleccione una opción</option>
        @foreach ($listaEstadoCivil as $id => $ecivil_p1)
            <option value="{{ $id }}" {{ (int) old('ecivil_p1') === $id ? 'selected' : '' }}>
                {{ \Illuminate\Support\Str::upper($ecivil_p1) }}
            </option>
        @endforeach
    </select>

    @if ($errors->has('ecivil_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('ecivil_p1') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="nacionalidad_p1" class="control-label col-md-3">Nacionalidad</label>
    <select
        name="nacionalidad_p1"
        id="nacionalidad_p1"
        class="custom-select col-md-9{{ $errors->has('nacionalidad_p1') ? ' is-invalid' : '' }}"
    >
        <option value="">Seleccione una opción</option>
        @foreach ($listaNacionalidad as $id => $nacionalidad_p1)
            <option value="{{ $id }}" {{ (int) old('nacionalidad_p1') === $id ? 'selected' : '' }}>
                {{ \Illuminate\Support\Str::upper($nacionalidad_p1) }}
            </option>
        @endforeach
    </select>

    @if ($errors->has('nacionalidad_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('nacionalidad_p1') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtDireccion_p1" class="control-label col-md-3"><span class="obligatorio">* </span> Dirección</label>
    <input type="text" name="txtDireccion_p1" id="txtDireccion_p1" class="form-control col-md-9{{ $errors->has('txtDireccion_p1') ? ' is-invalid' : '' }}" value="{{ old('txtDireccion_p1') ?: "" }}" placeholder="Dirección y ciudad" required />

    @if ($errors->has('txtDireccion_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtDireccion_p1') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="comuna_p1" class="control-label col-md-3"><span class="obligatorio">* </span> Comuna</label>
    <select
        name="comuna_p1"
        id="comuna_p1"
        class="custom-select col-md-9{{ $errors->has('comuna_p1') ? ' is-invalid' : '' }}"
    >
        <option value="">Seleccione una opción</option>
        @foreach ($listacomuna as $comuna)
            <option value="{{ $comuna->id_comuna }}" {{ (int) old('comuna_p1') === $comuna->id_comuna ? 'selected' : '' }}>
                {{ \Illuminate\Support\Str::upper($comuna->comuna) }}
            </option>
        @endforeach
    </select>

    @if ($errors->has('comuna_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('comuna_p1') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtMail_p1" class="control-label col-md-3"><span class="obligatorio">* </span> Correo electrónico</label>
    <input type="email" name="txtMail_p1" id="txtMail_p1" class="form-control col-md-9{{ $errors->has('txtMail_p1') ? ' is-invalid' : '' }}" value="{{ old('txtMail_p1') ?: "" }}" placeholder="Formato: correo@correo.cl" required />

    @if ($errors->has('txtMail_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtMail_p1') }}</span>
    @endif
</div>


<div class="form-group">
    <label for="txtFono1_p1" class="control-label col-md-3"><span class="obligatorio">* </span> Teléfono contacto</label>
    <input type="number" name="txtFono1_p1" id="txtFono1_p1" class="form-control col-md-9{{ $errors->has('txtFono1_p1') ? ' is-invalid' : '' }}" value="{{ old('txtFono1_p1') ?: "" }}" placeholder="Número fijo o celular (Solo números)" required />

    @if ($errors->has('txtFono1_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtFono1_p1') }}</span>
    @endif
</div>


<div class="form-group mb-5 pb-5">
    <input type="text" name="txtFono2_p1" id="txtFono2_p1" class="form-control offset-md-3 col-md-9{{ $errors->has('txtFono2_p1') ? ' is-invalid' : '' }}" value="{{ old('txtFono2_p1') ?: "" }}" placeholder="Número fijo o celular (Solo números)" required />

    @if ($errors->has('txtFono2_p1'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtFono2_p1') }}</span>
    @endif
</div>
