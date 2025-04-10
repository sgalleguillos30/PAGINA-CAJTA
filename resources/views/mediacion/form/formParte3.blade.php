{{-- <h3 class="titleborder pt-5"><span class="bold">Parte 3:</span><br /> Breve descripción de los hechos a mediar</h3> --}}

{{-- <div class="form-group mb-5">
    <label for="txtMensaje" class="control-label col-md-3"><span class="obligatorio">* </span> Mensaje</label>
    <textarea class="form-control col-md-9{{ $errors->has('txtMensaje') ? ' is-invalid' : '' }}" id="txtMensaje" name="txtMensaje" rows="6" style="resize:none">{{ old('txtMensaje') ?: "" }}</textarea>

    @if ($errors->has('txtMensaje'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('txtMensaje') }}</span>
    @endif
</div> --}}

<h3 class="titleborder pt-5"><span class="bold">Parte 3:</span><br /> Materia por la que necesita ser atendido</h3>


<div class="form-group">
    <label for="materia_p3" class="control-label col-md-3"><span class="obligatorio">* </span> Materia de atención</label>
    <select
        name="materia_p3"
        id="materia_p3"
        class="custom-select col-md-9{{ $errors->has('materia_p3') ? ' is-invalid' : '' }}"
    >
        <option value="">Seleccione una opción</option>
        @foreach ($listaMaterias as $id => $materia)
            <option value="{{ $id }}" {{ (int) old('materia_p3') === $id ? 'selected' : '' }}>
                {{ \Illuminate\Support\Str::upper($materia) }}
            </option>
        @endforeach
    </select>

    @if ($errors->has('materia_p3'))
        <span class="invalid-feedback offset-md-3 bold" style="display: inline-block;">{{ $errors->first('materia_p3') }}</span>
    @endif
</div>
