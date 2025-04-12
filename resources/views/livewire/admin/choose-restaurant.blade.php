<div>
    <div class="row">
        @foreach(auth()->user()->restaurants as $restaurant)
            <a href="{{route('manage-restaurant', $restaurant->id)}}" wire:navigate.hover>
                <div class="col-md-3">
                    <div class="product-card text-center">
                        <img src="https://placehold.co/100" alt="Restaurant Logo" class="img-fluid">
                        <h5 class="text-center">{{ $restaurant->name }}</h5>
                    </div>
                </div>
            </a>


        @endforeach
    </div>

</div>
