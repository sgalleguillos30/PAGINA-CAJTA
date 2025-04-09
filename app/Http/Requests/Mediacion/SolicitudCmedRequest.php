<?php

namespace App\Http\Requests\Mediacion;

use Illuminate\Foundation\Http\FormRequest;

class SolicitudCmedRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        switch ( $this->method() ) {
            case "GET":
            case "DELETE":
            case "PUT":
                return [];

            case "POST": {
                return [
                    'txtRut_p1'         => 'required|min:9|max:15|cl_rut',
                    'DiagCheck_p1'      => 'required_if:txtRut_p1,==,0000000-0',
                    'txtNombre_p1'      => 'required|min:3|max:90',
                    'txtApellido1_p1'   => 'required|min:3|max:90',
                    'txtApellido2_p1'   => 'required|min:3|max:90',
                    'txtFnac_p1'        => 'nullable|min:2|max:11|date_format:d-m-Y|before:today',
                    'sexo_p1'           => 'nullable|exists:sexo,id_sexo',
                    'ecivil_p1'         => 'nullable|exists:estado_civil,id_estadocivil',
                    'nacionalidad_p1'   => 'nullable|exists:nacionalidad,id_nacionalidad',
                    'txtDireccion_p1'   => 'required|min:3|max:250',
                    'comuna_p1'         => 'required|exists:comuna,id_comuna',
                    'txtMail_p1'        => 'required|min:2|max:70|email',
                    'txtFono1_p1'       => 'required|numeric',
                    'txtFono2_p1'       => 'nullable|numeric',

                    'txtRut_p2'         => 'nullable|min:9|max:15|cl_rut',
                    'txtNombre_p2'      => 'required|min:3|max:90',
                    'txtApellido1_p2'   => 'required|min:3|max:90',
                    'txtApellido2_p2'   => 'required|min:3|max:90',
                    'txtFnac_p2'        => 'nullable|min:2|max:11|date_format:d-m-Y|before:today',
                    'sexo_p2'           => 'nullable|exists:sexo,id_sexo',
                    'ecivil_p2'         => 'nullable|exists:estado_civil,id_estadocivil',
                    'nacionalidad_p2'   => 'nullable|exists:nacionalidad,id_nacionalidad',
                    'txtDireccion_p2'   => 'nullable|min:3|max:250',
                    'comuna_p2'         => 'nullable|exists:comuna,id_comuna',
                    'txtMail_p2'        => 'nullable|min:2|max:70|email',
                    'txtFono1_p2'       => 'required|numeric',
                    'txtFono2_p2'       => 'nullable|numeric',

                    'materia_p3'        => 'required|exists:cmed_materia_atencion,id_cmed_materia',
////                    'txtMensaje'        => ['required', 'min:3', 'max:10']

                ];
                break;
            }
        }
    }


    public function messages()
    {
        return [
            'txtRut_p1.required'            => 'Este campo es obligatorio.',
            'txtRut_p1.max'                 => 'El campo no debe ser mayor que :max caracteres.',
            'txtRut_p1.min'                 => 'El campo debe contener al menos :min caracteres.',
            'txtRut_p1.cl_rut'              => 'Ingrese un RUT válido.',
            'DiagCheck_p1.required_if'      => 'Este campo es obligatorio.',
            'txtNombre_p1.required'         => 'Este campo es obligatorio.',
            'txtNombre_p1.max'              => 'El campo no debe ser mayor que :max caracteres.',
            'txtNombre_p1.min'              => 'El campo debe contener al menos :min caracteres.',
            'txtApellido1_p1.required'      => 'Este campo es obligatorio.',
            'txtApellido1_p1.max'           => 'El campo no debe ser mayor que :max caracteres.',
            'txtApellido1_p1.min'           => 'El campo debe contener al menos :min caracteres.',
            'txtApellido2_p1.required'      => 'Este campo es obligatorio.',
            'txtApellido2_p1.max'           => 'El campo no debe ser mayor que :max caracteres.',
            'txtApellido2_p1.min'           => 'El campo debe contener al menos :min caracteres.',
            'txtFnac_p1.max'                => 'El campo no debe ser mayor que :max caracteres.',
            'txtFnac_p1.min'                => 'El campo debe contener al menos :min caracteres.',
            'txtFnac_p1.date_format'        => 'La fecha ingresada no corresponde al formato, este debe ser dd-mm-aaaa.',
            'txtFnac_p1.before'             => 'La fecha ingresada no puede ser superior a la fecha de hoy.',
            'sexo_p1.exists'                => 'El valor seleccionado es invalido.',
            'ecivil_p1.exists'              => 'El valor seleccionado es invalido.',
            'nacionalidad_p1.exists'        => 'El valor seleccionado es invalido.',
            'txtDireccion_p1.required'      => 'Este campo es obligatorio.',
            'txtDireccion_p1.max'           => 'El campo no debe ser mayor que :max caracteres.',
            'txtDireccion_p1.min'           => 'El campo debe contener al menos :min caracteres.',
            'comuna_p1.exists'              => 'El valor seleccionado es invalido.',
            'comuna_p1.required'            => 'Este campo es obligatorio.',
            'txtMail_p1.required'           => 'Este campo es obligatorio.',
            'txtMail_p1.max'                => 'El campo no debe ser mayor que :max caracteres.',
            'txtMail_p1.min'                => 'El campo debe contener al menos :min caracteres.',
            'txtMail_p1.email'              => 'Ingrese un formato de correo válido.',
            'txtFono1_p1.required'          => 'Este campo es obligatorio.',
            'txtFono1_p1.numeric'           => 'Debe ingresar solo números.',
            'txtFono2_p1.numeric'           => 'Debe ingresar solo números.',


            'txtRut_p2.max'                 => 'El campo no debe ser mayor que :max caracteres.',
            'txtRut_p2.min'                 => 'El campo debe contener al menos :min caracteres.',
            'txtRut_p2.cl_rut'              => 'Ingrese un RUT válido.',
            'txtNombre_p2.required'         => 'Este campo es obligatorio.',
            'txtNombre_p2.max'              => 'El campo no debe ser mayor que :max caracteres.',
            'txtNombre_p2.min'              => 'El campo debe contener al menos :min caracteres.',
            'txtApellido1_p2.required'      => 'Este campo es obligatorio.',
            'txtApellido1_p2.max'           => 'El campo no debe ser mayor que :max caracteres.',
            'txtApellido1_p2.min'           => 'El campo debe contener al menos :min caracteres.',
            'txtApellido2_p2.required'      => 'Este campo es obligatorio.',
            'txtApellido2_p2.max'           => 'El campo no debe ser mayor que :max caracteres.',
            'txtApellido2_p2.min'           => 'El campo debe contener al menos :min caracteres.',
            'txtFnac_p2.max'                => 'El campo no debe ser mayor que :max caracteres.',
            'txtFnac_p2.min'                => 'El campo debe contener al menos :min caracteres.',
            'txtFnac_p2.date_format'        => 'La fecha ingresada no corresponde al formato, este debe ser dd-mm-aaaa.',
            'txtFnac_p2.before'             => 'La fecha ingresada no puede ser superior a la fecha de hoy.',
            'sexo_p2.exists'                => 'El valor seleccionado es invalido.',
            'ecivil_p2.exists'              => 'El valor seleccionado es invalido.',
            'nacionalidad_p2.exists'        => 'El valor seleccionado es invalido.',
            'txtDireccion_p2.max'           => 'El campo no debe ser mayor que :max caracteres.',
            'txtDireccion_p2.min'           => 'El campo debe contener al menos :min caracteres.',
            'comuna_p2.exists'              => 'El valor seleccionado es invalido.',
            'txtMail_p2.max'                => 'El campo no debe ser mayor que :max caracteres.',
            'txtMail_p2.min'                => 'El campo debe contener al menos :min caracteres.',
            'txtMail_p2.email'              => 'Ingrese un formato de correo válido.',
            'txtFono1_p2.required'          => 'Este campo es obligatorio.',
            'txtFono1_p2.numeric'           => 'Debe ingresar solo números.',
            'txtFono2_p2.numeric'           => 'Debe ingresar solo números.',

            'txtMensaje.required'           => 'Este campo es obligatorio.',
            'txtMensaje.max'                => 'El campo no debe ser mayor que :max caracteres.',
            'txtMensaje.min'                => 'El campo debe contener al menos :min caracteres.',

            'materia_p3.required'           => 'Este campo es obligatorio.',
            'materia_p3.exists'             => 'El valor seleccionado es invalido.',
        ];
    }
}
