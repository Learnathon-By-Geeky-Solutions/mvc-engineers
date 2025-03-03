<!-- signin page start -->
<section class="login-hero-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 m-auto">
                <div class="login-data">
                    <form class="auth-form">
                        <h2>Sign in</h2>
                        <h5>
                            or
                            <a wire:navigate.hover href="{{route('signup')}}"><span class="theme-color">create an a account</span></a>
                        </h5>
                        <div class="form-input">
                            <input wire:model.debounce="email" type="email" class="form-control" placeholder="Enter your Email">
                            <i class="ri-phone-line"></i>
                        </div>
                        <div class="form-input">
                            <input wire:model.debounce="password" type="password" class="form-control" placeholder="Enter your password">
                            <i class="ri-lock-password-line"></i>
                        </div>
                        <a wire:click.debounce="Authenticate" class="btn theme-btn submit-btn w-100 rounded-2">Sign In</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- signin page end -->
