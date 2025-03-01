<!-- signup page start -->
<section class="login-hero-section section-b-space">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 m-auto">
                <div class="login-data">
                    <form class="auth-form">
                        <h2>Sign up</h2>
                        <h5>
                            or
                            <a href="{{route('signin')}}"><span class="theme-color">login to your account</span></a>
                        </h5>
                        <div class="form-input">
                            <input wire:model.debounce="name" type="text" class="form-control" placeholder="Enter your name">
                            <i class="ri-user-3-line"></i>
                        </div>
                        <div class="form-input">
                            <input wire:model.debounce="email" type="email" class="form-control" placeholder="Enter your Email">
                            <i class="ri-phone-line"></i>
                        </div>
                        <div class="form-input">
                            <input wire:model.debounce="password" type="password" class="form-control" placeholder="Enter your password">
                            <i class="ri-lock-password-line"></i>
                        </div>
                        <a href="#" wire:click.debounce="Register"  class="btn theme-btn submit-btn w-100 rounded-2">Sign Up</a>
                        <p class="fw-normal content-color">
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
