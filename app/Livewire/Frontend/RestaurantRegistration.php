<?php

namespace App\Livewire\Frontend;

use App\Models\Restaurant;
use App\Models\User;
use Hash;
use Livewire\Component;
use Livewire\WithFileUploads;
use Password;

class RestaurantRegistration extends Component
{
    use WithFileUploads;

    // Step tracking
    public $currentStep = 1;
    public $totalSteps = 4;

    // Step 1: Account Information
    public $name;
    public $email;
    public $phone;
    public $password;
    public $password_confirmation;

    // Step 2: Restaurant Information
    public $restaurant_name;
    public $restaurant_type;
    public $restaurant_description;
    public $cuisine = [];

    // Step 3: Location Information
    public $address;
    public $city;
    public $postal_code;

    // Step 4: Additional Details
    public $website;
    public $opening_time;
    public $closing_time;
    public $days_open = [];
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

        // Validate all fields before submission
        $this->validate();

        // Begin database transaction
        \DB::beginTransaction();

        try {
            // Create user
            $user = User::create([
                'name' => $this->name,
                'email' => $this->email,
                'phone' => $this->phone,
                'password' => Hash::make($this->password),
                'role' => 'restaurant_owner',
            ]);

            // Process logo and photos
            $logoPath = null;
            if ($this->logo) {
                $logoPath = $this->logo->store('restaurant_logos', 'public');
            }

            $photosPaths = [];
            if ($this->photos) {
                foreach ($this->photos as $photo) {
                    $photosPaths[] = $photo->store('restaurant_photos', 'public');
                }
            }

            // Create restaurant
            $restaurant = Restaurant::create([
                'user_id' => $user->id,
                'name' => $this->restaurant_name,
                'type' => $this->restaurant_type,
                'description' => $this->restaurant_description,
                'cuisine' => json_encode($this->cuisine),
                'address' => $this->address,
                'city' => $this->city,
                'postal_code' => $this->postal_code,
                'website' => $this->website,
                'opening_time' => $this->opening_time,
                'closing_time' => $this->closing_time,
                'days_open' => json_encode($this->days_open),
                'logo' => $logoPath,
                'photos' => json_encode($photosPaths),
                'status' => 'pending', // Pending approval
            ]);

            \DB::commit();

            // Login the user
            auth()->login($user);

            // Redirect to dashboard with success message
            return redirect()->route('restaurant.dashboard')->with('success', 'Restaurant registered successfully! Your listing is pending approval.');

        } catch (\Exception $e) {
            \DB::rollback();
            session()->flash('error', 'Registration failed: ' . $e->getMessage());
            dump($e->getMessage());
        }
    }

    public function render()
    {
        return view('livewire.frontend.restaurant-registration')->layout('livewire.layout.frontend');;
    }
}
