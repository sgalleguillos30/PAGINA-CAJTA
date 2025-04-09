<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class OneOptionRule implements Rule
{

    private $comparar;

    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct( $comparar )
    {
        $this->comparar = $comparar; 
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        if ( empty($value)){
            return true;
        } elseif( !empty( $value ) and empty( $this->comparar )) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Solo debe seleccionar una sola opción, no ambas.';
    }
}
