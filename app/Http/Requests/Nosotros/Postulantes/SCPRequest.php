<?php

namespace App\Http\Requests\Nosotros\Postulantes;

use App\Model\FPostulantesCertUnidadExterna;
use App\Model\Unidad;
use App\Rules\OneOptionRule;
use Illuminate\Foundation\Http\FormRequest;

class SCPRequest extends FormRequest
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
    public function rules(): array
    {
        switch ( $this->method() ) {
            case "GET":
            case "DELETE":
            case "PUT":
                return [];

            case "POST": {
                return [
                    'txtRut'            => ['required', 'min:9', 'max:15', 'cl_rut'],
                    'txtNombre'         => ['required', 'min:3', 'max:120'],
                    'txtApellido1'      => ['required', 'min:3', 'max:120'],
                    'txtApellido2'      => ['nullable', 'min:3', 'max:120'],
                    'txtMail'           => ['required', 'email', 'min:5', 'max:160'],
                    'txtFono'           => ['nullable', 'min:3', 'max:30'],
                    'sexo'              => ['required', 'exists:sexo,id_sexo'],
                    'unidad'            => [
                        'required_without:unidad_externa', 
                        new OneOptionRule( $this->unidad_externa ), 
                        function( $attribute, $value, $fail ) {
                            if ( $this->input('unidad') ) {
                                if ( !Unidad::where('id_unidad', $value)->exists() ) {
                                    $fail('El campo ingresado no existe');
                                }
                            }
                        }
                    ],
                    'unidad_externa'    => [
                        'required_without:unidad', 
                        new OneOptionRule( $this->unidad ), 
                        function( $attribute, $value, $fail ) {
                            if ( $this->input('unidad_externa') ) {
                                if ( !FPostulantesCertUnidadExterna::where('id', $value)->exists() ) {
                                    $fail('El campo ingresado no existe');
                                }
                            }
                        }
                    ],
                    'txtFechaEstimada'  => ['required', 'date', 'date_format:Y-m-d'],
                ];
                break;
            }
        }
    }

    public function messages(): array
    {
        return [
            'txtRut.required'       => 'Este campo es obligatorio.',
            'txtRut.max'            => 'El campo no debe ser mayor que :max caracteres.',
            'txtRut.min'            => 'El campo debe contener al menos :min caracteres.',
            'txtRut.cl_rut'         => 'Ingrese un RUT válido.',

            'txtNombre.required'    => 'Este campo es obligatorio.',
            'txtNombre.max'         => 'El campo no debe ser mayor que :max caracteres.',
            'txtNombre.min'         => 'El campo debe contener al menos :min caracteres.',
            
            'txtApellido1.required' => 'Este campo es obligatorio.',
            'txtApellido1.max'      => 'El campo no debe ser mayor que :max caracteres.',
            'txtApellido1.min'      => 'El campo debe contener al menos :min caracteres.',

            'txtApellido2.max'      => 'El campo no debe ser mayor que :max caracteres.',
            'txtApellido2.min'      => 'El campo debe contener al menos :min caracteres.',

            'txtMail.required'      => 'Este campo es obligatorio.',
            'txtMail.email'         => 'Ingrese un formato de correo válido.',
            'txtMail.max'           => 'El campo no debe ser mayor que :max caracteres.',
            'txtMail.min'           => 'El campo debe contener al menos :min caracteres.',
            
            'txtFono.max'           => 'El campo no debe ser mayor que :max caracteres.',
            'txtFono.min'           => 'El campo debe contener al menos :min caracteres.',

            'sexo.required'         => 'Este campo es obligatorio.',
            'sexo.exists'           => 'El valor seleccionado es invalido.',

            'unidad.exists'             => 'El valor seleccionado es invalido.',
            'unidad.required_without'   => 'Este campo es obligatorio.',
            'unidad.exists'             => 'El campo ingresado no existe',

            'unidad_externa.required_without' => 'Este campo es obligatorio.',
            'unidad_externa.exists'           => 'El campo ingresado no existe',

            'txtFechaEstimada.required'     => 'Este campo es obligatorio.',
            'txtFechaEstimada.date'         => 'Ingrese un formato de fecha válido.',
            'txtFechaEstimada.date_format'  => 'Ingrese un formato de fecha válido (AA-mm-dd)',
        ];
    }
}
