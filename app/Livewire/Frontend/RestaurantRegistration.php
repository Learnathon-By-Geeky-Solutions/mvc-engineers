<?php

namespace App\Livewire\Frontend;

use App\Models\Restaurant;
use App\Models\User;
use App\Services\RestaurantRegistrationService;
use Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Password;

class RestaurantRegistration extends Component
{
    use WithFileUploads;

    // Add service property
    protected RestaurantRegistrationService $registrationService;

    public function boot(RestaurantRegistrationService $registrationService): void
    {
        $this->registrationService = $registrationService;
    }

    // All the form properties...
    public $currentStep = 1;
    public $totalSteps = 4;
    public $name, $email, $phone, $password, $password_confirmation;
    public $restaurant_name, $restaurant_type, $restaurant_description, $cuisine = [];
    public $address, $city, $postal_code;
    public $website, $opening_time, $closing_time, $days_open = [];
    public $logo;
    public $photos = [];

    // Validation rules for each step
    protected function rules()
    {
        return [
            // Step 1 rules
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'password' => ['required', 'confirmed'],

            // Step 2 rules
            'restaurant_name' => 'required|string|max:255',
            'restaurant_type' => 'required|string',
            'restaurant_description' => 'required|string|max:1000',
            'cuisine' => 'required|array|min:1',

            // Step 3 rules
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'postal_code' => 'required|string|max:20',

            // Step 4 rules
            'website' => 'nullable|url|max:255',
            'opening_time' => 'required',
            'closing_time' => 'required',
            'days_open' => 'required|array|min:1',
            'logo' => 'nullable|image|max:1024',
            'photos.*' => 'nullable|image|max:2048',
            'photos' => 'nullable|array|max:5',
        ];
    }

    // Custom validation messages
    protected $messages = [
        'cuisine.required' => 'Please select at least one cuisine type.',
        'days_open.required' => 'Please select at least one day when your restaurant is open.',
        'photos.max' => 'You can upload a maximum of 5 photos.',
    ];

    // Validate only current step fields
    public function validateCurrentStep()
    {
        $rules = $this->rules();
        $currentRules = [];

        // Get only the rules for the current step
        switch ($this->currentStep) {
            case 1:
                $currentRules = array_intersect_key($rules, array_flip([
                    'name', 'email', 'phone', 'password'
                ]));
                break;
            case 2:
                $currentRules = array_intersect_key($rules, array_flip([
                    'restaurant_name', 'restaurant_type', 'restaurant_description', 'cuisine'
                ]));
                break;
            case 3:
                $currentRules = array_intersect_key($rules, array_flip([
                    'address', 'city', 'postal_code'
                ]));
                break;
            case 4:
                $currentRules = array_intersect_key($rules, array_flip([
                    'website', 'opening_time', 'closing_time', 'days_open', 'logo', 'photos', 'photos.*'
                ]));
                break;
        }

        $this->validate($currentRules);
    }

    // Navigate to next step
    public function nextStep()
    {
        $this->validateCurrentStep();

        if ($this->currentStep < $this->totalSteps) {
            $this->currentStep++;
        }
    }

    // Navigate to previous step
    public function previousStep()
    {
        if ($this->currentStep > 1) {
            $this->currentStep--;
        }
    }

    // Complete registration
    public function register()
    {
        $this->validateCurrentStep();
        $this->validate();

        try {
            $user = $this->registrationService->register(
                [
                    'name' => $this->name,
                    'email' => $this->email,
                    'phone' => $this->phone,
                    'password' => $this->password,
                ],
                [
                    'restaurant_name' => $this->restaurant_name,
                    'restaurant_type' => $this->restaurant_type,
                    'restaurant_description' => $this->restaurant_description,
                    'cuisine' => $this->cuisine,
                    'address' => $this->address,
                    'city' => $this->city,
                    'postal_code' => $this->postal_code,
                    'website' => $this->website,
                    'opening_time' => $this->opening_time,
                    'closing_time' => $this->closing_time,
                    'days_open' => $this->days_open,
                ],
                $this->logo,
                collect($this->photos)
            );

            auth()->login($user);
            return $this->redirect(route('dashboard'));
        } catch (\Exception $e) {
            session()->flash('error', 'Registration failed: ' . $e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.frontend.restaurant-registration')->layout('livewire.layout.frontend');;
    }
}
