@include('header')
<main>
    <!-- Banner -->
    <section class="section position-relative" style="background-image: url(image/image-1920x900-1.jpg); height:700px ">
        <div class="image-overlay"></div>
        <div class="r-container position-relative h-100" style="z-index: 2;">
            <div class="row row-cols-lg-2 row-cols-1 w-100 h-100">
                <div class="col h-100">
                    <div class="d-flex flex-column h-100 justify-content-center gap-3">
                        <h6 class="fw-semibold font-1 accent-color-1 ls-2">WELCOME TO TRUEPHYSIO</h6>
                        <h2 class="accent-color font-1 fw-semibold">Keep Your Bone Strong & Health</h2>
                        <!-- <p class="font-1"> aspect-ratio:3/2
                            Aliquam ex nibh, rhoncus quis mi nec, imperdiet mattis est. Suspendisse potenti. Duis
                            vestibulum magna quis suscipit tempus.
                        </p> -->
                        <div class="d-flex flex-row gap-5">
                            <a href="{{ route('appointment') }}"
                                class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4">MAKE
                                APPOINTMENT</a>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <!-- ABOUT TUDEBON -->
    <section class="section">
        <div class="r-container">
            <div class="row row-cols-1 row-cols-lg-2">
                @if (count($aboutdata) > 0)
                    @foreach ($aboutdata as $newabout)
                        <div class="col mb-3">
                            <div class="position-relative ps-5">
                                <a href="{{ asset('storage/aboutImages/' . $newabout->image) }}"
                                    data-fslightbox="gallery" style="margin-left: -22px">
                                    <img src="{{ asset('storage/aboutImages/' . $newabout->image) }}" alt=""
                                        class="img-fluid rounded-4">
                                </a>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="d-flex flex-column gap-2 h-100 justify-content-center px-3">
                                <h6 class="fw-semibold font-1 accent-color-1 ls-2">ABOUT TRUEPHYSIO</h6>
                                <h5 class="accent-color font-1 fw-semibold">{{ $newabout->title }}</h5>
                                <p class="font-2 fw-light">
                                    {{ $newabout->short_about }}
                                </p>
                                <div class="row row-cols-1 row-cols-lg-2 mb-4">
                                    <div class="col">
                                        <div class="d-flex flex-row align-items-center gap-3">
                                            <img src="image/icon-eye.png" alt="" class="img-fluid"
                                                width="50" height="50">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h5 class="m-0">Our Vision</h5>
                                                <p class="m-0">As the BEST PHYSIOTHERAPISTS, our vision is to
                                                    redefine,</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="d-flex flex-row align-items-center gap-3">
                                            <img src="image/icon-bullseye.png" alt="" class="img-fluid"
                                                width="50" height="50">
                                            <div class="d-flex flex-column justify-content-center">
                                                <h5 class="m-0">Our Mission</h5>
                                                <p class="m-0">The mission of a BEST PHYSIOTHERAPIST is
                                                    multifaceted,</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <a href="{{ route('about') }}"
                                        class="btn button font-1 ls-2 fw-semibold fs-7 py-3 px-4">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>No About more</p>
                @endif
            </div>
        </div>
    </section>

    <!-- SERVICES -->
    <section class="section bg-color-2">
        <div class="r-container">
            <div class="d-flex flex-column text-center gap-2">
                <h3 class="accent-color font-1 fw-semibold">Services</h3>
                <p class="font-2 fw-light mx-auto" style="max-width: 912px;">
                </p>
                <div class="w-100 row row-cols-1 row-cols-lg-3">
                    @if (count($data) > 0)
                        @foreach ($data as $new)
                            <div class="col mb-3">

                                <div class="rounded-3 border border-3 p-5 d-flex flex-column justify-content-center align-items-center gap-3"
                                    style="--bs-border-color: var(--accent-color-1);">
                                    <img src="{{ asset('storage/serviceImages/thumbImage/' . $new->thumb) }}"
                                        alt="" class="img-fluid" width="80" height="80">
                                    <h5>{{ $new->title }}</h5>
                                    <p>{{ $new->short_about }}</p>
                                    <a href="{{ url('/more-services/' . $new->id) }}"
                                        class="btn font-1 fw-semibold accent-color-1">READ MORE <i
                                            class="fa-solid fa-arrow-right"></i></a>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <p>No Services</p>
                    @endif
                </div>
            </div>
        </div>
    </section>

    <section class="section">
        <div class="r-container">
            <div class="row row-cols-1 row-cols-lg-2">
                @foreach ($clinic_care as $newclinic)
                    <div class="col mb-3">
                        <div class="d-flex flex-column gap-2 h-100 justify-content-center px-3">
                            <h3>{{ $newclinic->short_title }}</h3>
                            <p class="font-2 fw-light">
                                {{ $newclinic->description }}</b>
                            </p>
                            <ul>
                                <li><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;{{ $newclinic->title1 }} </li>
                                <li><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;{{ $newclinic->title2 }} </li>
                                <li><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;{{ $newclinic->title3 }} </li>
                                <li><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;{{ $newclinic->title4 }}</li>
                                <li><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;{{ $newclinic->title5 }} </li>
                                <li><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;{{ $newclinic->title6 }} </li>
                                <li><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;{{ $newclinic->title7 }} </li>
                                <li><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;{{ $newclinic->title8 }} </li>
                                <li><i class="fa-regular fa-circle-dot"></i>&nbsp;&nbsp;{{ $newclinic->title9 }} </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="position-relative ps-5">
                            <a href="{{ asset('storage/ClinicCareImages/' . $newclinic->image) }}"
                                data-fslightbox="gallery">
                                <img src="{{ asset('storage/ClinicCareImages/' . $newclinic->image) }}" alt=""
                                    class="img-fluid rounded-4">
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>



    <section class="section position-relative bg-attach-fixed"
        style="background-image: url(image/image-1920x900-2.jpg);">
        <div class="image-overlay-2"></div>
        <div class="r-container position-relative mb-5" style="z-index: 2;">
            <div class="w-100 row row-cols-1 row-cols-lg-4 text-center text-white">
                <div class="col mb-4">
                    <div class="d-flex flex-column">
                        <h3><i class="fa-solid fa-users" style="color: white;"></i></h3>
                        <h3 class="font-1 fw-semibold m-0" style="color: white;">10,200<sup class="fw-normal">+</sup>
                        </h3>
                        <span class="font-1" style="color: white;">Happy Patients</span>
                    </div>
                </div>
                <div class="col mb-4">
                    <div class="d-flex flex-column">
                        <h3><i class="fa-solid fa-award" style="color: white;"></i></h3>
                        <h3 class="font-1 fw-semibold m-0" style="color: white;">12<sup class="fw-normal">Th</sup>
                        </h3>
                        <span class="font-1" style="color: white;">Years of Experience</span>
                    </div>
                </div>
                {{-- <div class="col mb-3">
                    <div class="d-flex flex-column">
                        <h3><i class="fa-solid fa-user-doctor" style="color: white;"></i></h3>
                        <h3 class="font-1 fw-semibold m-0" style="color: white;">250<sup class="fw-normal">+</sup>
                        </h3>
                        <span class="font-1" style="color: white;">Therapist & Staff</span>
                    </div>
                </div> --}}
                <div class="col mb-4">
                    <div class="d-flex flex-column">
                        <h3><i class="fa-solid fa-hospital" style="color: white;"></i></h3>
                        <h3 class="font-1 fw-semibold m-0" style="color: white;">7<sup class="fw-normal">+</sup>
                        </h3>
                        <span class="font-1" style="color: white;">Branch Clinic</span>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- HOW WE WORK -->
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 text-center">
                <h6 class="fw-semibold font-1 accent-color-1 ls-2">HOW WE WORK</h6>
                <h3 class="accent-color font-1 fw-semibold">Stages of Consultation</h3>

                <div class="row row-cols-1 row-cols-lg-4 mt-3">
                    <div class="col mb-3">
                        <div class="d-flex flex-column gap-2 justify-content-center align-items-center">
                            <div class="border-3 border rounded-3 p-3 mb-3"
                                style="--bs-border-color: var(--accent-color-1);">
                                <img src="image/notebook.png" alt="" class="img-fluid" width="40"
                                    height="40">
                            </div>
                            <h6 class="font-1 m-0">Make an Appointment</h6>

                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column gap-2 justify-content-center align-items-center">
                            <div class="border-3 border rounded-3 p-3 mb-3"
                                style="--bs-border-color: var(--accent-color-1);">
                                <img src="image/consulting.png" alt="" class="img-fluid" width="40"
                                    height="40">
                            </div>
                            <h6 class="font-1 m-0">Consultation</h6>

                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column gap-2 justify-content-center align-items-center">
                            <div class="border-3 border rounded-3 p-3 mb-3"
                                style="--bs-border-color: var(--accent-color-1);">
                                <img src="image/back.png" alt="" class="img-fluid" width="40"
                                    height="40">
                            </div>
                            <h6 class="font-1 m-0">Chiropractic Therapy</h6>

                        </div>
                    </div>
                    <div class="col mb-3">
                        <div class="d-flex flex-column gap-2 justify-content-center align-items-center">
                            <div class="border-3 border rounded-3 p-3 mb-3"
                                style="--bs-border-color: var(--accent-color-1);">
                                <img src="image/reviews.png" alt="" class="img-fluid" width="40"
                                    height="40">
                            </div>
                            <h6 class="font-1 m-0">Satisfied Review</h6>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Our Patient Review -->
    <section class="section">
        <div class="r-container">
            <div class="d-flex flex-lg-row flex-column-reverse">

                <div class="col col-lg-5 mb-3">
                    <div class="d-flex flex-column gap-3">
                        <h3 class="accent-color font-1 fw-semibold fs-1">Our Patient Review</h3>
                        <p class="font-2 fw-light mx-auto" style="max-width: 912px;"> </p>
                        <div class="overflow-hidden outer-margin">
                            <div class="swiper">
                                <!-- Additional required wrapper -->
                                <div class="swiper-wrapper">
                                    <!-- Slides -->
                                    @foreach ($review as $reviews)
                                        <div class="swiper-slide">
                                            <div class="d-flex flex-column bg-accent-color rounded-4 p-5 text-white">
                                                <h1><i class="fa-solid fa-quote-right" style="color: white;"></i></h1>
                                                <p class="text-gray mb-4 fst-italic font-1">
                                                    "{{ $reviews->description }}"
                                                </p>
                                                <div class="d-flex flex-column flex-grow-1">
                                                    <h6 class="font-2 lh-1 text-gray">{{ $reviews->name }}</h6>
                                                    {{-- <span class="text-gray">Gym Instructor</span> --}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-7 mb-3">
                    <a href="image/image-600x700-2.jpg" data-fslightbox="gallery">
                        <img src="image/image-600x700-2.jpg" alt="" class="img-fluid rounded-4">
                    </a>
                </div>

            </div>
        </div>
    </section>

    <section class="section bg-color-2">
        <div class="r-container">
            <div class="d-flex flex-column gap-3 text-center">
                <h6 class="fw-semibold font-1 accent-color-1 ls-2">FAQ</h6>
                <h3 class="accent-color font-1 fw-semibold">Frequently Asked Question</h3>
                <div class="row row-cols-1 row-cols-lg-1 text-start">
                    @foreach ($faq as $faqs)
                        <div class="col">
                            <div class="accordion" id="accordionExample">
                                <div class="accordion-item">
                                    <h2 class="accordion-header">
                                        <button class="accordion-button font-1 fw-semibold" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#faq{{ $loop->iteration }}"
                                            aria-expanded="true" aria-controls="faq1">
                                            {{ $faqs->question }}
                                        </button>
                                    </h2>
                                    <div id="faq{{ $loop->iteration }}" class="accordion-collapse collapse "
                                        data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            {{ $faqs->answer }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="section position-relative bg-attach-fixed"
        style="background-image: url(image/image-1920x900-4.jpg);">
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
