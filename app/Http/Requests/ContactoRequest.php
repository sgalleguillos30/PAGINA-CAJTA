<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactoRequest extends FormRequest
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
                    'txtRut'  => 'required|min:9|max:15|cl_rut',
                    'txtNombre'  => 'required|min:3|max:90',
                    'txtApellido1'  => 'required|min:3|max:90',
                    'txtApellido2'  => 'required|min:3|max:90',
                    'DiagCheck' => 'required_if:txtRut,==,0000000-0',
                    'txtDireccion'  => 'required|min:3|max:250',
                    'txtMail'  => 'required|min:2|max:70|email',
                    'txtFono' => 'nullable|numeric',
                    'sexo'  => 'required|exists:sexo,id_sexo',
                    'ciudad'  => 'required|exists:ciudad,id_ciudad',
                    'unidad'  => 'nullable|exists:unidad,id_unidad',
                    'tipo_respuesta'  => 'required|exists:tiporespuesta,id_tiporespuesta',
                    'tipo_mensaje'  => 'required|exists:tipomensaje,id_tipomensaje',
                    'txtMensaje'  => 'required|min:3|max:10000',
                    'confirmCheck'  => 'required',
                ];
                break;
            }
        }
    }


    public function messages()
    {
        return [
            'txtRut.required' => 'Este campo es obligatorio.',
            'txtRut.max' => 'El campo no debe ser mayor que :max caracteres.',
            'txtRut.min' => 'El campo debe contener al menos :min caracteres.',
            'txtRut.cl_rut' => 'Ingrese un RUT válido.',
            'DiagCheck.required_if' => 'Este campo es obligatorio.',
            'txtNombre.required' => 'Este campo es obligatorio.',
            'txtNombre.max' => 'El campo no debe ser mayor que :max caracteres.',
            'txtNombre.min' => 'El campo debe contener al menos :min caracteres.',
            'txtApellido1.required' => 'Este campo es obligatorio.',
            'txtApellido1.max' => 'El campo no debe ser mayor que :max caracteres.',
            'txtApellido1.min' => 'El campo debe contener al menos :min caracteres.',
            'txtApellido2.required' => 'Este campo es obligatorio.',
            'txtApellido2.max' => 'El campo no debe ser mayor que :max caracteres.',
            'txtApellido2.min' => 'El campo debe contener al menos :min caracteres.',
            'txtDireccion.required' => 'Este campo es obligatorio.',
            'txtDireccion.max' => 'El campo no debe ser mayor que :max caracteres.',
            'txtDireccion.min' => 'El campo debe contener al menos :min caracteres.',
            'txtMail.required' => 'Este campo es obligatorio.',
            'txtMail.max' => 'El campo no debe ser mayor que :max caracteres.',
            'txtMail.min' => 'El campo debe contener al menos :min caracteres.',
            'txtMail.email' => 'Ingrese un formato de correo válido.',
            'txtFono.numeric' => 'Debe ingresar solo números.',
            'sexo.required' => 'Este campo es obligatorio.',
            'sexo.exists' => 'El valor seleccionado es invalido.',
            'ciudad.required' => 'Este campo es obligatorio.',
            'ciudad.exists' => 'El valor seleccionado es invalido.',
            'unidad.exists' => 'El valor seleccionado es invalido.',
            'tipo_respuesta.required' => 'Este campo es obligatorio.',
            'tipo_respuesta.exists' => 'El valor seleccionado es invalido.',
            'tipo_mensaje.required' => 'Este campo es obligatorio.',
            'tipo_mensaje.exists' => 'El valor seleccionado es invalido.',
            'txtMensaje.required' => 'Este campo es obligatorio.',
            'txtMensaje.max' => 'El campo no debe ser mayor que :max caracteres.',
            'txtMensaje.min' => 'El campo debe contener al menos :min caracteres.',
            'confirmCheck.required' => 'Este campo es obligatorio.',
        ];
    }
}
