<?php

namespace App\Http\Requests\Intranet\Subida;

use Illuminate\Foundation\Http\FormRequest;

class NoticiasRequest extends FormRequest
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
                    'inputFile'  => 'required|max:4096|mimes:jpg,jpeg,png',
                ];
                break;
            }
        }
    }


    public function messages()
    {
        return [
            'inputFile.required' => 'Este campo es obligatorio.',
            'inputFile.mimes' => 'Los formatos aceptados son jpg, jpeg o png.',
            'inputFile.max' => 'El archivo no debe pesar más de 8MB.',
        ];
    }
}
