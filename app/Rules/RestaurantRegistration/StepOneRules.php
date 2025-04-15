<?php

namespace App\Rules\RestaurantRegistration;

use Illuminate\Contracts\Validation\Rule;

class StepOneRules implements Rule
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
     * Get the validation rules for step one.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'password' => ['required', 'confirmed'],
        ];
    }
}
