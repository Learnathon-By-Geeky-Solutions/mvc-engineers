<!-- responsive space -->
<div class="responsive-space"></div>
<!-- responsive space -->

<!-- bootstrap js -->
<script src="{{secure_asset('assets/frontend/js/bootstrap.bundle.min.js')}}"></script>

<!-- footer accordion js -->
<script src="{{secure_asset('assets/frontend/js/footer-accordion.js')}}"></script>

<!-- loader js -->
{{--<script src="{{secure_asset("assets/frontend/js/loader.js")}}"></script>--}}

<!-- swiper js -->
<script src="{{secure_asset('assets/frontend/js/swiper-bundle.min.js')}}"></script>
<script src="{{secure_asset('assets/frontend/js/custom-swiper.js')}}"></script>

<!-- aos js -->
<script src="{{secure_asset('assets/frontend/js/aos.js')}}"></script>

<!-- script js -->
<script src="{{secure_asset('assets/frontend/js/script.js')}}"></script>

<script>
    AOS.init({
        once: true
    });
    window.addEventListener('load', AOS.refresh);
</script>

@stack('scripts')
