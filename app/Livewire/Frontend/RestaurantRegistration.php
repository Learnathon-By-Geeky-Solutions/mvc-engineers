<?php

namespace App\Livewire\Frontend;

use App\Models\Restaurant;
use App\Models\User;
use App\Rules\RestaurantRegistration\StepFourRules;
use App\Rules\RestaurantRegistration\StepOneRules;
use App\Rules\RestaurantRegistration\StepThreeRules;
use App\Rules\RestaurantRegistration\StepTwoRules;
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

    // Custom validation messages
    protected $messages = [
        'cuisine.required' => 'Please select at least one cuisine type.',
        'days_open.required' => 'Please select at least one day when your restaurant is open.',
        'photos.max' => 'You can upload a maximum of 5 photos.',
    ];

    // Validate only current step fields
    public function validateCurrentStep()
    {
        $currentRules = [];

        // Get only the rules for the current step
        switch ($this->currentStep) {
            case 1:
                $currentRules = StepOneRules::rules();
                break;
            case 2:
                $currentRules = StepTwoRules::rules();
                break;
            case 3:
                $currentRules = StepThreeRules::rules();
                break;
            case 4:
                $currentRules = StepFourRules::rules();
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
        
        // Validate all steps
        $allRules = array_merge(
            StepOneRules::rules(),
            StepTwoRules::rules(),
            StepThreeRules::rules(),
            StepFourRules::rules()
        );
        
        $this->validate($allRules);

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
