<!doctype html>
<html class="no-js" lang="zxx">
<head>
    @include('template.partials._head')
</head>
<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="assets/img/logo/logo.png" alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start-->

    <!-- Header Start -->
    @include('template.partials._header')
    <!-- Header End -->

    <!-- Main Start -->
    @include('template.partials._main')
    <!-- Main End -->

    <!-- Footer Start -->
    @include('template.partials._footer')
    <!-- Footer End -->


<!-- JS here -->

    @include('template.partials._scripts')

</body>
</html>