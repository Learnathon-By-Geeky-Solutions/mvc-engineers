<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="{{secure_asset('assets/frontend/images/logo/favicon.png')}}" type="image/x-icon">
    <title>Open RMS</title>
    @include('livewire.layout.frontend-partials.styles')
</head>

<body class="position-relative noice-background">


@include('livewire.layout.frontend-partials.header')






{{$slot}}


@include('livewire.layout.frontend-partials.footer')



<!-- theme btn start -->
<div class="theme-btns" style="display: none">
    <button type="button" class="btntheme mode-change-button">
        <i id="themeIcon" class="ri-moon-line icon mode-icon"></i>
        <span class="text-value">Dark</span>
    </button>
    <button type="button" id="rtl-btn" class="btntheme rtlBtnEl">
        <i class="ri-repeat-line icon"></i>
        <span class="text-value">RTL</span>
    </button>
</div>
<!-- theme btn end -->

<!-- tap to top start -->
<button class="scroll scroll-to-top">
    <i class="ri-arrow-up-s-line arrow"></i>
</button>
<!-- tap to top end -->

@include('livewire.layout.frontend-partials.modals')
@include('livewire.layout.frontend-partials.scripts')
</body>

</html>
