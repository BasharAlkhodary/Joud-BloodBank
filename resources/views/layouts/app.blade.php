<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="Roxy">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title', 'Joud Blood')</title>
<!-- CSS فقط -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@600&display=swap" rel="stylesheet" />
<link href="https://fonts.googleapis.com/css?family=Lato:300,400|Work+Sans:300,400,700" rel="stylesheet" />
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />

<link rel="stylesheet" href="{{ asset('css/style.min.css') }}" />
<link rel="stylesheet" href="{{ asset('css/login.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/bootstrap/bootstrap.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/lightcase/lightcase.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/owlcarousel/owl.carousel.min.css') }}" />
<link rel="stylesheet" href="{{ asset('vendor/select2/select2.min.css') }}" />
<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" />
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" crossorigin="anonymous" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"/>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css">

</head>
<body data-spy="scroll" data-target="#navbar" class="static-layout">


    <main>
        @yield('content')
    </main>

<!-- JS فقط -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>

<script src="{{ asset('vendor/bootstrap/popper.min.js') }}"></script>
{{-- <script src="{{ asset('vendor/bootstrap/bootstrap.min.js') }}"></script> --}}

<script src="{{ asset('vendor/countTo/jquery.countTo.js') }}"></script>
<script src="{{ asset('vendor/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script>
$(document).ready(function(){
    $(".owl-carousel").owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        dots: true
    });
});
</script>
<script>
    AOS.init();

    $(document).ready(function(){
        $('.client-slider').owlCarousel({
            items: 3,
            loop: true,
            autoplay: true,
            margin: 30,
            responsive:{
                0:{ items:1 },
                600:{ items:2 },
                1000:{ items:3 }
            }
        });
    });
</script>
<script src="{{ asset('vendor/isotope/isotope.min.js') }}"></script>
<script src="{{ asset('vendor/lightcase/lightcase.js') }}"></script>
<script src="{{ asset('vendor/select2/select2.min.js') }}"></script>
{{-- <script src="{{ asset('vendor/stellar/jquery.stellar.js') }}"></script> --}}
<script src="{{ asset('vendor/waypoints/waypoint.min.js') }}"></script>

<script type="module" src="{{ asset('js/app.js') }}"></script>
<script type="module" src="{{ asset('js/app.min.js') }}"></script>
<script type="module" src="{{ asset('js/toast.js') }}"></script>
<script type="module" src="{{ asset('js/login.js') }}"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
<script src="https://unpkg.com/alpinejs" defer></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
