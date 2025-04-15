<?php

namespace App\Rules\RestaurantRegistration;

use Illuminate\Contracts\Validation\Rule;

class StepFourRules implements Rule
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
     * Get the validation rules for step four.
     *
     * @return array
     */
    public static function rules()
    {
        return [
            'website' => 'nullable|url|max:255',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'days_open' => 'required|array|min:1',
            'logo' => 'nullable|image|max:1024',
            'photos.*' => 'nullable|image|max:2048',
            'photos' => 'nullable|array|max:5',
        ];
    }
}
