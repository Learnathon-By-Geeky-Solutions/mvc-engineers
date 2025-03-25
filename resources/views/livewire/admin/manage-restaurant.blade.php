<!-- resources/views/livewire/restaurant-tabs.blade.php -->
<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="updateRestaurant">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs" id="restaurantTabs" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link active" id="info-tab" data-bs-toggle="tab"
                        data-bs-target="#info" type="button" role="tab"
                        aria-controls="info" aria-selected="true">
                    Basic Info
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="menu-tab" data-bs-toggle="tab"
                        data-bs-target="#menu" type="button" role="tab"
                        aria-controls="menu" aria-selected="false">
                    Menu
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link" id="about-tab" data-bs-toggle="tab"
                        data-bs-target="#about" type="button" role="tab"
                        aria-controls="about" aria-selected="false">
                    About
                </button>
            </li>
        </ul>

        <!-- Tab panes -->
        <div class="tab-content mt-3" id="restaurantTabsContent">
            <!-- Basic Info Tab -->
            <div class="tab-pane fade show active" id="info" role="tabpanel"
                 aria-labelledby="info-tab">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" class="form-control"
                                   wire:model="restaurant.name">
                            @error('restaurant.name')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Address</label>
                            <input type="text" class="form-control"
                                   wire:model="restaurant.address">
                            @error('restaurant.address')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone</label>
                            <input type="text" class="form-control"
                                   wire:model="restaurant.phone">
                            @error('restaurant.phone')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hours</label>
                            <input type="text" class="form-control"
                                   wire:model="restaurant.hours">
                            @error('restaurant.hours')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Menu Tab -->
            <div class="tab-pane fade" id="menu" role="tabpanel"
                 aria-labelledby="menu-tab">
                <div class="card">
                    <div class="card-body">
                        <!-- Menu items could be made editable with additional logic -->
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Item</th>
                                <th>Description</th>
                                <th>Price</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($restaurant['menu'] as $item)
                                <tr>
                                    <td>{{ $item['name'] }}</td>
                                    <td>{{ $item['description'] }}</td>
                                    <td>${{ number_format($item['price'], 2) }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <!-- About Tab -->
            <div class="tab-pane fade" id="about" role="tabpanel"
                 aria-labelledby="about-tab">
                <div class="card">
                    <div class="card-body">
                        <div class="mb-3">
                            <label class="form-label">About Us</label>
                            <textarea class="form-control" rows="5"
                                      wire:model="restaurant.about"></textarea>
                            @error('restaurant.about')
                            <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mt-3">
            <button type="submit" class="btn btn-primary">Update Restaurant</button>
        </div>
    </form>
</div>

@push('styles')
    <style>
        .nav-tabs .nav-link {
            color: #495057;
        }
        .nav-tabs .nav-link.active {
            color: #007bff;
        }
        .card {
            border: none;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
    </style>
@endpush
