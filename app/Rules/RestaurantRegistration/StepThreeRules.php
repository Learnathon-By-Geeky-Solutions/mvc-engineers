<?php

namespace App\Rules\RestaurantRegistration;

use Illuminate\Contracts\Validation\Rule;

class StepThreeRules implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return true; // This is a container for rules, not a single rule
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is invalid.';
    }

    /**
     * Get the validation rules for step three.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',
        ];
    }
}
