@include('header')
<!-- End Of Header -->

<main>
    <!-- Banner -->
    <section class="section position-relative" style="background-image: url(image/image-1920x900-5.jpg);">
        <div class="image-overlay"></div>
        <div class="r-container position-relative h-100" style="z-index: 2;">
            <div class="d-flex flex-column gap-3">
                <h3 class="accent-color font-1 fw-semibold">Laser Therapy</h3>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{ route('index') }}">Home</a></li>
                        <li class="breadcrumb active" aria-current="page">&nbsp;&nbsp;/ Laser Therapy</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="r-container">
            <div class="row ">
                <div class="col col-lg-12">
                    <div class="d-flex flex-column">
                        <h3 class="fw-semibold font-1">Laser Therapy</h3>
                        <div class="d-flex flex-row gap-3 mb-3">
                            <div class="d-flex gap-2 align-items-center">
                                <i class="fa-regular fa-file-lines"></i>
                                Laser Therapy
                            </div>
                        </div>
                        {{-- <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas rutrum ultrices nisi,
                            at congue sapien lobortis vel. Sed maximus tincidunt mi et luctus. Phasellus gravida
                            elit nec lectus commodo, et pretium tortor fermentum. Quisque massa justo, posuere a
                            semper sed, vestibulum non nibh. Nulla fringilla semper mi sed pulvinar. Curabitur
                            accumsan felis in dui placerat lobortis. Pellentesque et malesuada orci, quis pretium
                            neque. Aenean accumsan sodales tortor, porta tempor nunc efficitur quis. Nunc sit amet
                            magna ac dui aliquet euismod nec vitae nisi. Donec vel ligula enim. Vivamus sed risus
                            semper, fringilla massa at, rhoncus quam. Vestibulum nec ante suscipit, commodo nisi ac,
                            dapibus nunc. Donec sit amet est pharetra, laoreet nisl nec, volutpat nunc.
                        </p> --}}
                        <div class="row row-cols-1 row-cols-lg-2 mb-3">
                            <div class="col col-lg-6">
                                <a href="image/image-600x500-1.jpg" data-fslightbox="gallery">
                                    <img src="image/image-600x500-1.jpg" alt="" class="img-fluid rounded-3">
                                </a>
                            </div>
                            <div class="col col-lg-6">
                                <h6>The Treatment You Get</h6>
                                <p>Aliquam ex nibh, rhoncus quis mi nec, imperdiet mattis est suspendisse.</p>
                                <ul class="list gap-1">
                                    <li class="d-flex flex-row gap-2 align-items-center">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Aenean euismod eros
                                    </li>
                                    <li class="d-flex flex-row gap-2 align-items-center">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Duis vestibulum magna quis
                                    </li>
                                    <li class="d-flex flex-row gap-2 align-items-center">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Quisque congue gravida
                                    </li>
                                    <li class="d-flex flex-row gap-2 align-items-center">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        In hac habitasse
                                    </li>
                                    <li class="d-flex flex-row gap-2 align-items-center">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Maecenas dictum fringilla
                                    </li>
                                    <li class="d-flex flex-row gap-2 align-items-center">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Aenean euismod eros
                                    </li>
                                    <li class="d-flex flex-row gap-2 align-items-center">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Integer urna magna
                                    </li>
                                    <li class="d-flex flex-row gap-2 align-items-center">
                                        <i class="fa-regular fa-circle-dot"></i>
                                        Nullam eu augue volutpat
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <p>
                            Aliquam ex nibh, rhoncus quis mi nec, imperdiet mattis est. Suspendisse potenti. Duis
                            vestibulum magna quis suscipit tempus. Nunc pretium placerat condimentum. Praesent sed
                            turpis ut sem bibendum euismod ut in lacus. Quisque congue gravida interdum. Quisque
                            vitae placerat lorem. Praesent sapien nibh, pellentesque vitae tincidunt eu, tempus at
                            nibh.
                        </p>
                        <div>
                            <h6>Chiropractic Benefits</h6>
                            <ul class="row row-cols-1 row-cols-lg-3 p-0 mt-3">
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    Aenean euismod eros
                                </li>
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    Maecenas dictum fringilla
                                </li>
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    Duis vestibulum magna
                                </li>
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    Duis vestibulum magna
                                </li>
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    Aenean euismod eros
                                </li>
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    Quisque congue gravida
                                </li>
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    Quisque congue gravida
                                </li>
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    Integer urna magna
                                </li>
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    Maecenas dictum fringilla
                                </li>
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    In hac habitasse
                                </li>
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    Nullam eu augue volutpat
                                </li>
                                <li class="col mb-1 d-flex flex-row gap-2 align-items-center">
                                    <i class="fa-regular fa-circle-dot"></i>
                                    Aenean euismod eros
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section position-relative bg-attach-fixed" style="background-image: url(image/image-1920x900-4.jpg);">
        <div class="image-overlay-2"></div>
        <div class="r-container position-relative" style="z-index: 2;">
            <div class="d-flex flex-column gap-3 text-white text-center align-items-center">
                <h3 style="font-size: 48px; color: white;">Feel Something Wrong With Your Bones?</h3>

                <a href="{{ route('contact') }}" class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4">FREE
                    CONSULTATION</a>
            </div>
        </div>
    </section>
</main>
@include('footer')
