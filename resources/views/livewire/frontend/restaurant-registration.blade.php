<div>
    <!-- signup page start -->
    <section class="login-hero-section section-b-space">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-lg-10 col-md-12 m-auto">
                    <div class="login-data">
                        <form class="auth-form">
                            <h2>Register Your Restaurant</h2>
                            <h5>
                                or
                                <a wire:navigate.hover href="{{route('signin')}}"><span class="theme-color">login to your account</span></a>
                            </h5>

                            <!-- Progress Bar -->
                            <div class="progress mb-4" style="height: 6px;">
                                <div class="progress-bar theme-color" role="progressbar"
                                     style="width: {{ ($currentStep * 100) / $totalSteps }}%;"
                                     aria-valuenow="{{ ($currentStep * 100) / $totalSteps }}"
                                     aria-valuemin="0"
                                     aria-valuemax="100">
                                </div>
                            </div>

                            <!-- Step Indicators -->
                            <div class="d-flex justify-content-between mb-4">
                                <div class="text-center {{ $currentStep >= 1 ? 'theme-color' : 'content-color' }}">
                                    <i class="ri-user-3-line {{ $currentStep >= 1 ? 'fw-bold' : '' }}"></i>
                                    <div class="small">Account</div>
                                </div>
                                <div class="text-center {{ $currentStep >= 2 ? 'theme-color' : 'content-color' }}">
                                    <i class="ri-store-2-line {{ $currentStep >= 2 ? 'fw-bold' : '' }}"></i>
                                    <div class="small">Restaurant</div>
                                </div>
                                <div class="text-center {{ $currentStep >= 3 ? 'theme-color' : 'content-color' }}">
                                    <i class="ri-map-pin-line {{ $currentStep >= 3 ? 'fw-bold' : '' }}"></i>
                                    <div class="small">Location</div>
                                </div>
                                <div class="text-center {{ $currentStep >= 4 ? 'theme-color' : 'content-color' }}">
                                    <i class="ri-file-list-3-line {{ $currentStep >= 4 ? 'fw-bold' : '' }}"></i>
                                    <div class="small">Details</div>
                                </div>
                            </div>

                            <!-- Step 1: Account Information -->
                            @if ($currentStep == 1)
                                <div>
                                    <div class="form-input">
                                        <input wire:model.debounce="name" type="text" class="form-control" placeholder="Enter your name">
                                        <i class="ri-user-3-line"></i>
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-input">
                                        <input wire:model.debounce="email" type="email" class="form-control" placeholder="Enter your Email">
                                        <i class="ri-mail-line"></i>
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-input">
                                        <input wire:model.debounce="phone" type="text" class="form-control" placeholder="Enter your Phone Number">
                                        <i class="ri-phone-line"></i>
                                        @error('phone') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-input">
                                        <input wire:model.debounce="password" type="password" class="form-control" placeholder="Enter your password">
                                        <i class="ri-lock-password-line"></i>
                                        @error('password') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-input">
                                        <input wire:model.debounce="password_confirmation" type="password" class="form-control" placeholder="Confirm your password">
                                        <i class="ri-lock-password-line"></i>
                                        @error('password_confirmation') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            @endif

                            <!-- Step 2: Restaurant Information -->
                            @if ($currentStep == 2)
                                <div>
                                    <div class="form-input">
                                        <input wire:model.debounce="restaurant_name" type="text" class="form-control" placeholder="Restaurant Name">
                                        <i class="ri-store-2-line"></i>
                                        @error('restaurant_name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-input">
                                        <select wire:model.debounce="restaurant_type" class="form-control">
                                            <option value="">Select Restaurant Type</option>
                                            <option value="fine_dining">Fine Dining</option>
                                            <option value="casual">Casual Dining</option>
                                            <option value="fast_food">Fast Food</option>
                                            <option value="cafe">Café</option>
                                            <option value="buffet">Buffet</option>
                                            <option value="food_truck">Food Truck</option>
                                            <option value="pub">Pub/Bar</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <i class="ri-restaurant-line"></i>
                                        @error('restaurant_type') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-input">
                                        <textarea wire:model.debounce="restaurant_description" class="form-control" rows="3" placeholder="Brief description of your restaurant"></textarea>
                                        <i class="ri-file-text-line"></i>
                                        @error('restaurant_description') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-input">
                                        <select wire:model.debounce="cuisine" class="form-control" multiple>
                                            <option value="">Select Cuisines (Multiple)</option>
                                            <option value="italian">Italian</option>
                                            <option value="chinese">Chinese</option>
                                            <option value="indian">Indian</option>
                                            <option value="mexican">Mexican</option>
                                            <option value="japanese">Japanese</option>
                                            <option value="thai">Thai</option>
                                            <option value="french">French</option>
                                            <option value="american">American</option>
                                            <option value="mediterranean">Mediterranean</option>
                                            <option value="other">Other</option>
                                        </select>
                                        <i class="ri-restaurant-2-line"></i>
                                        @error('cuisine') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>
                            @endif

                            <!-- Step 3: Location Information -->
                            @if ($currentStep == 3)
                                <div>
                                    <div class="form-input">
                                        <input wire:model.debounce="address" type="text" class="form-control" placeholder="Complete Address">
                                        <i class="ri-map-pin-line"></i>
                                        @error('address') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-input">
                                                <input wire:model.debounce="city" type="text" class="form-control" placeholder="City">
                                                <i class="ri-building-line"></i>
                                                @error('city') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-input">
                                                <input wire:model.debounce="postal_code" type="text" class="form-control" placeholder="Postal/Zip Code">
                                                <i class="ri-mail-send-line"></i>
                                                @error('postal_code') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif

                            <!-- Step 4: Additional Details -->
                            @if ($currentStep == 4)
                                <div>
                                    <div class="form-input">
                                        <input wire:model.debounce="website" type="url" class="form-control" placeholder="Restaurant Website (Optional)">
                                        <i class="ri-global-line"></i>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-input">
                                                <input wire:model.debounce="opening_time" type="time" class="form-control" placeholder="Opening Time">
                                                <i class="ri-time-line"></i>
                                                @error('opening_time') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-input">
                                                <input wire:model.debounce="closing_time" type="time" class="form-control" placeholder="Closing Time">
                                                <i class="ri-time-line"></i>
                                                @error('closing_time') <span class="text-danger">{{ $message }}</span> @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-input">
                                        <div class="mb-2">Days Open</div>
                                        <div class="d-flex flex-wrap">
                                            @foreach(['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'] as $day)
                                                <div class="form-check me-3 mb-2">
                                                    <input wire:model.debounce="days_open" class="form-check-input" type="checkbox" value="{{ strtolower($day) }}" id="{{ strtolower($day) }}">
                                                    <label class="form-check-label" for="{{ strtolower($day) }}">
                                                        {{ $day }}
                                                    </label>
                                                </div>
                                            @endforeach
                                        </div>
                                        @error('days_open') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="form-input">
                                        <div class="mb-2">Upload Restaurant Logo (Optional)</div>
                                        <input wire:model.debounce="logo" type="file" class="form-control" accept="image/*">
                                    </div>
                                    <div class="form-input">
                                        <div class="mb-2">Upload Restaurant Photos (Optional, Max 5)</div>
                                        <input wire:model.debounce="photos" type="file" class="form-control" accept="image/*" multiple>
                                    </div>
                                </div>
                            @endif

                            <!-- Navigation Buttons -->
                            <div class="d-flex justify-content-between mt-4">
                                @if ($currentStep > 1)
                                    <button type="button" wire:click="previousStep" class="btn btn-outline-secondary rounded-2">
                                        <i class="ri-arrow-left-line me-1"></i> Previous
                                    </button>
                                @else
                                    <div></div>
                                @endif

                                @if ($currentStep < $totalSteps)
                                    <button type="button" wire:click="nextStep" class="btn theme-btn rounded-2">
                                        Next <i class="ri-arrow-right-line ms-1"></i>
                                    </button>
                                @else
                                    <button type="button" wire:click="register" class="btn theme-btn rounded-2">
                                        Complete Registration
                                    </button>
                                @endif
                            </div>

                            <p class="fw-normal content-color mt-3">
                                By creating an account, I accept the
                                <span class="fw-semibold">
                                    Terms & Conditions & Privacy Policy</span>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- signup page end -->
</div>
