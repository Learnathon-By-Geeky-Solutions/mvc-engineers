<?php

namespace App\Rules\RestaurantRegistration;

use Illuminate\Contracts\Validation\Rule;

class StepTwoRules implements Rule
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
     * Get the validation rules for step two.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'restaurant_name' => 'required|string|max:255',
            'restaurant_type' => 'required|string',
            'restaurant_description' => 'required|string|max:1000',
            'cuisine' => 'required|array|min:1',
        ];
    }
}
