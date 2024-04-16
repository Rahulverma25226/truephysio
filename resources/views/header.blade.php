<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title><?= $comp_name ?></title>
</head>

<body>
    <!-- Scripts -->
    <script src="{{ asset('js/vendor/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/vendor/jquery.min.js') }}"></script>
    <script src="{{ asset('js/vendor/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('js/script.js') }}"></script>
    <script src="{{ asset('js/swiper-script.js') }}"></script>
    <script src="{{ asset('js/submit-form.js') }}"></script>
    <script src="{{ asset('js/vendor/isotope.pkgd.min.js') }}"></script>

    <!-- Header -->
    <section class="sticky-top bg-accent-color-1">
        <div class="r-container">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <div class="logo-container">
                        <a href="{{ route('index') }}"><img src="image/logo22.jpg" style="height: 50px" alt=""
                                class="img-fluid"></a>
                    </div>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                        data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fa-solid fa-bars-staggered"></i>
                    </button>
                    <div class="collapse p-lg-0 px-2 py-3 navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3">
                            <li class="nav-item">
                                <a class="nav-link" aria-current="page" href="{{ route('index') }}">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('about') }}">About Us</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('services') }}">Services</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('gallery') }}">Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('appointment') }}">Appointment</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('carrier_option') }}">Carrier Option</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('contact') }}">Contact Us</a>
                            </li>
                        </ul>
                        <div>
                            <div class="d-flex flex-row align-items-center gap-3 text-white">
                                <span class="fs-2"><i class="fa-solid fa-phone"></i></span>
                                <div class="d-flex flex-column">
                                    <span>Call Us</span>
                                    <span><?= $comp_phone ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </section>
