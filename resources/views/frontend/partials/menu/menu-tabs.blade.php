<section class="tab-details-section section-b-space">
    <div class="container">
        <div class="category-detail-tab">
            <div class="row g-4">

              {{-- #### Food Section #### --}}
              <div class="col-lg-9">
                <div class="menu-button d-inline-block d-lg-none">
                  <a href="#!"><i class="ri-book-open-line"></i> Menu</a>
                </div>

                    {{-- ### Tab Options ### --}}
                    {{-- Order Online - Overview - Photos - Reviews --}}
                    <ul class="nav nav-tabs tab-style1" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="order-tab" data-bs-toggle="tab"
                                data-bs-target="#online" type="button" role="tab">
                                Order Online
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="overview-tab" data-bs-toggle="tab"
                                data-bs-target="#overview" type="button" role="tab">
                                Overview
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="items-tab" data-bs-toggle="tab" data-bs-target="#photo"
                                type="button" role="tab">
                                Photos
                            </button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="activity-tab" data-bs-toggle="tab" data-bs-target="#review"
                                type="button" role="tab">
                                Reviews
                            </button>
                        </li>
                    </ul>

                    {{-- ### Tab Content ### --}}
                    <div class="tab-content product-details-content" id="myTabContent">
                      {{-- ## Food Tab ## --}}
                      @include('frontend.partials.menu.food-tab')
                      
                      {{-- ## Overview Tab ## --}}
                      @include('frontend.partials.menu.overview-tab')
                      
                      {{-- ## Photo Tab ## --}}
                      @include('frontend.partials.menu.photo-tab')
                      
                      {{-- ## Review Tab ## --}}
                      @include('frontend.partials.menu.review-tab')
                        
                    </div>
                </div>

              {{-- #### Cart Section #### --}}
                <div class="col-lg-3 product-details-content">
                    <div class="order-summery-section sticky-top">
                        <div class="checkout-detail">
                            <h3 class="fw-semibold dark-text checkout-title">
                                Cart Items
                            </h3>
                            <div class="order-summery-section mt-0">
                                <div class="checkout-detail p-0">
                                    <ul>
                                        <li>
                                            <div class="horizontal-product-box">
                                                <div class="product-content">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5>Ultimate Loaded Nacho Fiesta</h5>
                                                        <h6 class="product-price">$20</h6>
                                                    </div>
                                                    <h6 class="ingredients-text">Hot Nacho Chips</h6>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mt-md-2 mt-1 gap-1">
                                                        <h6 class="place">Serve 1</h6>
                                                        <div class="plus-minus">
                                                            <i class="ri-subtract-line sub"></i>
                                                            <input type="number" value="1" min="1" max="10">
                                                            <i class="ri-add-line add"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="horizontal-product-box">
                                                <div class="product-content">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5>Smoked Salmon Bagel</h5>
                                                        <h6 class="product-price">$40</h6>
                                                    </div>
                                                    <h6 class="ingredients-text">Smoked Biscuit</h6>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mt-md-2 mt-1 gap-1">
                                                        <h6 class="place">Serve 2</h6>
                                                        <div class="plus-minus">
                                                            <i class="ri-subtract-line sub"></i>
                                                            <input type="number" value="1" min="1" max="10">
                                                            <i class="ri-add-line add"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="horizontal-product-box">
                                                <div class="product-content">
                                                    <div class="d-flex align-items-center justify-content-between">
                                                        <h5>Cranberry Club Sandwich</h5>
                                                        <h6 class="product-price">$50</h6>
                                                    </div>
                                                    <h6 class="ingredients-text">Vegetables</h6>
                                                    <div
                                                        class="d-flex align-items-center justify-content-between mt-md-2 mt-1 gap-1">
                                                        <h6 class="place">Serve 3</h6>
                                                        <div class="plus-minus">
                                                            <i class="ri-subtract-line sub"></i>
                                                            <input type="number" value="1" min="1" max="10">
                                                            <i class="ri-add-line add"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                    <h5 class="bill-details-title fw-semibold dark-text">
                                        Bill Details
                                    </h5>
                                    <div class="sub-total">
                                        <h6 class="content-color fw-normal">Sub Total</h6>
                                        <h6 class="fw-semibold">$110</h6>
                                    </div>
                                    <div class="sub-total">
                                        <h6 class="content-color fw-normal">
                                            Delivery Charge (2 kms)
                                        </h6>
                                        <h6 class="fw-semibold success-color">Free</h6>
                                    </div>
                                    <div class="sub-total">
                                        <h6 class="content-color fw-normal">Discount (10%)</h6>
                                        <h6 class="fw-semibold">$10</h6>
                                    </div>
                                    <div class="grand-total">
                                        <h6 class="fw-semibold dark-text">To Pay</h6>
                                        <h6 class="fw-semibold amount">$100</h6>
                                    </div>
                                </div>
                            </div>
                            <a href="checkout.html" class="btn theme-btn restaurant-btn w-100 rounded-2">Proceed to
                                payment</a>
                            <img class="dots-design" src="{{ asset ('assets/frontend/images/svg/dots-design.svg') }}" alt="dots">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>